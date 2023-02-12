<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\IndustryForMarket;
use App\Models\NicheForMarket;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MarketNicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = IndustryForMarket::select('id','name')->orderBy('name', 'ASC')->get();
        return view('backend.marketplace.niche',[
            'country'=>$country,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'industry_id'=>'required',
        ]);

        $name = explode("," , $request->name);

        for ($i=0; $i < count($name); $i++) {
            NicheForMarket::insert([
                'name'=>trim($name[$i]),
                'industry_id'=>$request->industry_id,
                'created_at'=>Carbon::now(),
            ]);
        }
        NicheForMarket::where('name','=','')->delete();

        return response()->json([
            'success'=>'success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $info = NicheForMarket::where('id','=',$request->id)->first();
        return response()->json([
            'info'=>$info,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            "name"=> 'required',
            "iso3"=>'required',
            "iso2"=>'required',
            "phonecode"=>'required',
            "capital"=>'required',
            "region"=>'required',
        ]);

        NicheForMarket::where('id','=',$request->id)->update([
            "name"=> $request->name,
            "iso3"=>$request->iso3,
            "iso2"=>$request->iso2,
            "phonecode"=>$request->phonecode,
            "capital"=>$request->capital,
            "region"=>$request->region,
            'created_at'=>Carbon::now(),
        ]);

        return response()->json([
            'success'=>'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        NicheForMarket::where('id','=',$request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }

    public function automarketniche()
    {
        $city = NicheForMarket::all();
        $data = [];
        foreach ($city as $value) {
            $data[] = [
                'id'=>$value->id,
                'name'=>$value->name,
                'industry_id'=>$value->getIndustry->name,
            ];
        }
        return $data;
    }
}
