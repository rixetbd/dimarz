<?php

namespace App\Http\Controllers\Leads;

use App\Http\Controllers\Controller;
use App\Models\CountryForMarket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MarketCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.marketplace.country');
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
            "name"=> 'required',
            "iso3"=>'required',
            "iso2"=>'required',
        ]);

        CountryForMarket::insert([
            "name"=> trim($request->name),
            "iso3"=>$request->iso3,
            "iso2"=>Str::lower($request->iso2),
            'created_at'=>Carbon::now(),
        ]);

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
        $info = CountryForMarket::where('id','=',$request->id)->first();
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
        ]);

        CountryForMarket::where('id','=',$request->id)->update([
            "name"=> $request->name,
            "iso3"=>$request->iso3,
            "iso2"=>$request->iso2,
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
        CountryForMarket::where('id','=',$request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }

    public function autocountry()
    {
        $country = CountryForMarket::all();
        $data = [];
        foreach ($country as $value) {
            $data[] = [
                'id'=>$value->id,
                'name'=>$value->name,
                'iso3'=>$value->iso3,
                'iso2'=>$value->iso2,
            ];
        }
        return $data;
    }
}
