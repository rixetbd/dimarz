<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.aboutsection.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.aboutsection.create');
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
            "title"=>'required',
            "section_position"=>'required',
            "description"=>'required',
        ]);
        AboutSection::insert([
            "title"=>$request->title,
            "section_position"=>$request->section_position,
            "comment"=>$request->comment,
            "description"=>$request->description,
            "author"=>Auth::user()->id,
            "created_at"=>Carbon::now(),
        ]);
        return redirect()->route('backend.aboutsection.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = AboutSection::where('id','=', $id)->first();
        return view('backend.aboutsection.show',[
            'data'=>$data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutSection = AboutSection::where('id','=', $id)->first();
        return view('backend.aboutsection.edit',[
            'aboutSection'=>$aboutSection,
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
            "title"=>'required',
            "section_position"=>'required',
            "description"=>'required',
        ]);
        AboutSection::where('id','=',$request->id)->update([
            "title"=>$request->title,
            "section_position"=>$request->section_position,
            "comment"=>$request->comment,
            "description"=>$request->description,
            "author"=>Auth::user()->id,
        ]);
        return redirect()->route('backend.aboutsection.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        AboutSection::where('id','=', $request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }

    public function autoaboutsection(Request $request)
    {
        $aboutSection = AboutSection::all();
        $data = [];
        foreach ($aboutSection as $key => $value) {
            $data[] = [
                "id"=>$value->id,
                "title"=>$value->title,
                "section_position"=>($value->section_position == 0?'Left Position':'Right Position'),
                "comment"=>$value->comment,
                "author"=>$value->getAuthor->name,
            ];
        }
        return $data;
    }


}
