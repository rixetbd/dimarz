<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Leads;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{

    public function leadresetdata(Request $request){

        $cities='<option value="">-- All City</option>';
        $all_cities = City::orderBy('name', 'asc')->get();
        foreach ($all_cities as $city) {
            $cities .= '<option value="'.$city->id.'">'.$city->name.'</option>';
        }

        return response()->json([
            'cities'=>$cities,
            // 'lead_datasearch'=>$lead_datasearch,
        ]);
    }

    public function getcities(Request $request)
    {
        $cities='<option value="">-- All City</option>';
        $all_cities = City::where( 'country_id' , $request->country)->orderBy('name', 'asc')->get();
        foreach ($all_cities as $city) {
            $cities .= '<option value="'.$city->id.'">'.$city->name.'</option>';
        }
        $country = Country::find($request->country);
        $lead_datasearch = Leads::where('country', '=', $country->name)->get();
        return response()->json([
            'country_name'=>$country->name,
            'cities'=>$cities,
            'lead_datasearch'=>$lead_datasearch,
        ]);
    }

    public function leadByCountry($name)
    {
        $leads = Leads::where('country','=',$name)->select('person_name','title','email','phone','company_name','industry','company_size','revenue','zip_code','country','city','website')->take(300)->get();
        foreach ($leads as $value) {
            $data[] = [
                'person_name'=>$value->person_name,
                'title'=>$value->title,
                'email'=>Str::substr($value->email, 0, 3)."****@*****".Str::substr($value->email, -5),
                'phone'=>Str::substr($value->phone, 0, 6)."*****",
                'company_name'=>Str::limit($value->company_name, 15),
                'industry'=>$value->industry,
                'company_size'=>$value->company_size,
                'revenue'=>$value->revenue,
                'zip_code'=>$value->zip_code,
                'country'=>$value->country,
                'city'=>$value->city,
                'website'=>Str::substr($value->website, 0, 15)."*****".Str::substr($value->website, -6),
            ];
        }
        return $data;
    }


}
