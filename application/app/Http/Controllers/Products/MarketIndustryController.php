<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\IndustryForMarket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MarketIndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.marketplace.industry');
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
        ]);
        IndustryForMarket::insert([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'author'=>Auth::id(),
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
    public function edit($id)
    {
        //
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
            'name'=>'required',
        ]);
        IndustryForMarket::find($request->id)->update([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
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
        IndustryForMarket::find($request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }


    public function automarketindustry()
    {
        // $data = [];
        $data = IndustryForMarket::orderBy('name', 'ASC')->select('id','name','slug')->get();
        return $data;
    }

}
