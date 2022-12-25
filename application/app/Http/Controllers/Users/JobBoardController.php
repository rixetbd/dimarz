<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\JobBoard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.jobboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jobboard.create');
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
            'title'=>'required',
            'vacency'=>'required',
            'job_status'=>'required',
            'description'=>'required',
        ]);
        JobBoard::insert([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title.rand(100,200)),
            'vacency'=>$request->vacency,
            'job_status'=>$request->job_status,
            'description'=>$request->description,
            'deadline'=>$request->deadline,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('backend.jobboard.index');
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
        $data = JobBoard::where('id','=',$id)->first();
        return view('backend.jobboard.edit',[
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
            'title'=>'required',
            'vacency'=>'required',
            'job_status'=>'required',
            'description'=>'required',
        ]);
        JobBoard::where('id','=',$request->id)->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title.Carbon::today()),
            'vacency'=>$request->vacency,
            'job_status'=>$request->job_status,
            'description'=>$request->description,
            'deadline'=>$request->deadline,
        ]);
        return redirect()->route('backend.jobboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        JobBoard::where('id','=',$request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }


    public function alljobboard()
    {
        $allJobBoard = JobBoard::orderBy('created_at','DESC')->orderBy('updated_at','DESC')->get();
        $data = [];
        foreach ($allJobBoard as $value) {
            $data[] = [
                'id'=>$value->id,
                'title'=>$value->title,
                'vacency'=>$value->vacency,
                'deadline'=>($value->deadline!=''?$value->deadline:'N/A'),
                'created_at'=>($value->updated_at!=''?$value->updated_at->diffForHumans():$value->created_at->diffForHumans()),
            ];
        }
        return $data;
    }
}
