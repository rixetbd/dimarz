<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.testimonial.create');
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
            'client_name'=>'required',
            'location'=>'required',
            'text'=>'required',
        ]);

        Testimonial::insert([
            'client_name'=>$request->client_name,
            'location'=>$request->location,
            'text'=>$request->text,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('backend.testimonial.index');
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
        $data = Testimonial::where('id','=',$id)->first();
        return view('backend.testimonial.edit',[
            'data'=>$data,
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
            'client_name'=>'required',
            'location'=>'required',
            'text'=>'required',
        ]);

        Testimonial::where('id','=',$request->id)->update([
            'client_name'=>$request->client_name,
            'location'=>$request->location,
            'text'=>$request->text,
        ]);
        return redirect()->route('backend.testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Testimonial::where('id','=',$request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }

    public function alltestimonial()
    {
        $alltestimonial = Testimonial::all();
        $data = [];
        foreach ($alltestimonial as $value) {
            $data[] = [
                'id'=>$value->id,
                'client_name'=>$value->client_name,
                'location'=>$value->location,
                'text'=>Str::limit($value->text, 70),
                'created_at'=>($value->updated_at!=''?$value->updated_at->diffForHumans():$value->created_at->diffForHumans()),
            ];
        }
        return $data;
    }
}
