<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\ThreeEasyStep;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PageWidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $easysteps = ThreeEasyStep::all();
        return view('backend.pages.easysteps',[
            'easysteps'=>$easysteps,
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

        if($request->hasFile('picture'))
        {
            foreach ($request->picture as $key => $value) {
                $picture[] = Str::slug($request->title).'-'.$key.'-'.$value->getClientOriginalExtension();
                $filename = Str::slug($request->title). '-'.$key. '.' . $value->getClientOriginalExtension();
                $path = base_path('uploads/stepsdata/' . $filename);
                Image::make($value)->fit(400, 300)->save($path);
            }
        }

        $stepsdata = [];
        foreach ($request->text as $key => $value) {
            $stepsdata[] = [
                "text"=>$value,
                "picture"=>$picture[$key],
            ];
        }
        ThreeEasyStep::insert([
            "title"=>$request->title,
            "comment"=>$request->comment,
            "stepsdata"=>json_encode($stepsdata),
            "author"=>Auth::user()->id,
            "created_at"=>Carbon::now(),
        ]);
        return back();
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ThreeEasyStep::findOrFail($id)->delete();
        return back();
    }
}
