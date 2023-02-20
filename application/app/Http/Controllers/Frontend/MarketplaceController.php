<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CountryForMarket;
use App\Models\IndustryForMarket;
use App\Models\LeadsForMarket;
use App\Models\NicheForMarket;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function upwork(){
        $country = CountryForMarket::orderBy('name','ASC')->get();
        $industry = IndustryForMarket::orderBy('name','ASC')->get();
        $niche = NicheForMarket::orderBy('name','ASC')->get();
        $leads = LeadsForMarket::take(15)->get();
        return view('frontend.page.upworkshow',[
            'country'=>$country,
            'industry'=>$industry,
            'niche'=>$niche,
            'leads'=>$leads,
        ]);
    }

    public function nicheupdate(Request $request){
        $industry_id = IndustryForMarket::where('name','=', $request->industry)->first();
        $nicheupdate = NicheForMarket::where('industry_id','=', $industry_id->id)->orderBy('name','ASC')->get();
        $htmldata = '<option value="">Industry</option>';

        foreach ($nicheupdate as $key => $item) {
            $htmldata .= '<option value="'.$item->name.'">'.$item->name.'</option>';
        }

        return response()->json([
            'htmldata'=>$htmldata,
        ]);

    }


    public function leadBycountry(Request $request){

        if ($request->country != '') {
            $leadBycountry = LeadsForMarket::where('country','=',$request->country)
                                            ->orderBy('company_name', 'ASC')
                                            ->orderBy('company_address', 'ASC')
                                            ->take(15)->get();
        }

        if ($request->industry != '') {
            $leadBycountry = LeadsForMarket::where('industry','=',$request->industry)
                                            ->orderBy('company_name', 'ASC')
                                            ->orderBy('company_address', 'ASC')
                                            ->take(15)->get();
        }

        if ($request->niche != '') {
            $leadBycountry = LeadsForMarket::where('niche','=',$request->niche)
                                            ->orderBy('company_name', 'ASC')
                                            ->orderBy('company_address', 'ASC')
                                            ->take(15)->get();
        }

        if ($request->country != '' && $request->industry != '') {
            $leadBycountry = LeadsForMarket::where('country','=',$request->country)
                                            ->where('industry','=',$request->industry)
                                            ->orderBy('company_name', 'ASC')
                                            ->orderBy('company_address', 'ASC')
                                            ->take(15)->get();
        }

        if ($request->industry != '' && $request->niche != '') {
            $leadBycountry = LeadsForMarket::where('industry','=',$request->industry)
                                            ->where('niche','=',$request->niche)
                                            ->orderBy('company_name', 'ASC')
                                            ->orderBy('company_address', 'ASC')
                                            ->take(15)->get();
        }

        if ($request->country != '' && $request->industry != '' && $request->niche != '') {
            $leadBycountry = LeadsForMarket::where('country','=',$request->country)
                                            ->where('industry','=',$request->industry)
                                            ->where('niche','=',$request->niche)
                                            ->orderBy('company_name', 'ASC')
                                            ->orderBy('company_address', 'ASC')
                                            ->take(15)->get();
        }

        $htmldata = '';

        if (count($leadBycountry) > 0) {
            foreach ($leadBycountry as $item) {
                $htmldata .= "<tr><td>".$item->company_name."</td><td>".$item->website."</td><td>".$item->company_address.
                                "</td><td>".$item->person_fname."</td><td>".$item->person_lname."</td><td>".
                                $item->title."</td><td>".$item->p_email."</td><td>".$item->company_email.
                                "</td><td>".$item->phone_one."</td><td>".$item->phone_two."</td><td>".
                                $item->revenue."</td><td>".$item->company_size."</td><td>".
                                $item->linkedin."</td><td>".$item->instagram."</td><td>".
                                $item->facebook."</td><td>".$item->source_link."</td></tr>";
            }
        }else{
            $htmldata .= '<tr><td colspan="16" style="line-height: 50px;text-align: center;">Unfortunately, there is currently no available data. However, we would be happy to gather any type of data you require.</td></tr>';
        }


        return response()->json([
            'htmldata'=>$htmldata,
        ]);
    }

    public function randomsearch(Request $request){
        $CountryForMarket = CountryForMarket::where('name', 'LIKE', '%'.$request->input.'%')->select('name')->get();
        $IndustryForMarket = IndustryForMarket::where('name', 'LIKE', '%'.$request->input.'%')->select('name')->get();
        $NicheForMarket = NicheForMarket::where('name', 'LIKE', '%'.$request->input.'%')->select('name')->get();
        $html = '';

        // if (count($CountryForMarket) == 0 && count($IndustryForMarket) == 0 && count($NicheForMarket) == 0) {
        //     $html .= "<li>No results found.</li>";
        // }else{
            foreach ($CountryForMarket as $value) {
                $html .= "<li>".$value->name."</li>";
            }
            foreach ($IndustryForMarket as $value) {
                $html .= "<li>".$value->name."</li>";
            }
            foreach ($NicheForMarket as $value) {
                $html .= "<li>".$value->name."</li>";
            }
        // }

        return response()->json([
            'result'=> $html,
        ]);
    }

    public function selectsearch(Request $request){
        $LeadsForMarket = LeadsForMarket::where('country', 'LIKE', '%'.$request->newinput.'%')
                            ->orWhere('industry', 'LIKE', '%'.$request->newinput.'%')
                            ->orWhere('niche', 'LIKE', '%'.$request->newinput.'%')
                            ->orWhere('company_name', 'LIKE', '%'.$request->newinput.'%')
                            ->limit(15)->get();
        $leadresult = '';

        if (count($LeadsForMarket) != 0) {
            foreach ($LeadsForMarket as $item) {
                $leadresult .= "<tr><td>".$item->company_name."</td><td>".$item->website."</td><td>".$item->company_address.
                                "</td><td>".$item->person_fname."</td><td>".$item->person_lname."</td><td>".
                                $item->title."</td><td>".$item->p_email."</td><td>".$item->company_email.
                                "</td><td>".$item->phone_one."</td><td>".$item->phone_two."</td><td>".
                                $item->revenue."</td><td>".$item->company_size."</td><td>".
                                $item->linkedin."</td><td>".$item->instagram."</td><td>".
                                $item->facebook."</td><td>".$item->source_link."</td></tr>";
            }
        }else{
            $leadresult .= '<tr><td colspan="16" style="line-height: 50px;text-align: center;">Unfortunately, there is currently no available data. However, we would be happy to gather any type of data you require.</td></tr>';
        }

        return response()->json([
            'leadresult'=> $leadresult,
        ]);
    }
}
