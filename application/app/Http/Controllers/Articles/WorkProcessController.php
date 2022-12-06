<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\WorkProcess;
use App\Models\WorkProcessSteps;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.workprocess.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workProcess = WorkProcess::all();
        return view('backend.workprocess.create',[
            'workProcess'=>$workProcess
        ]);
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
            'subtitle'=>'required',
            'comment'=>'required',
        ]);

        WorkProcess::insert([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'comment'=>$request->comment,
            'author'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);

        return response()->json([
            'success'=>'success'
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
        $workprocess = WorkProcess::all();
        $activeWorkprocess = WorkProcess::where('id', $id)->first();
        $workProcessSteps = WorkProcessSteps::where('work_process_id', $id)->get();
        return view('backend.workprocess.show',[
            'workprocess'=>$workprocess,
            'activeWorkprocess'=>$activeWorkprocess,
            'workProcessSteps'=>$workProcessSteps,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $workProcessData = WorkProcess::where('id', '=',$request->id)->first();
        return response()->json([
            'workProcessData'=>$workProcessData
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
            'subtitle'=>'required',
            'comment'=>'required',
        ]);

        WorkProcess::where('id', '=', $request->id)->update([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'comment'=>$request->comment,
            'author'=>Auth::user()->id,
        ]);

        return response()->json([
            'success'=>'success'
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
        WorkProcess::findOrFail($request->id)->delete();
        return response()->json([
            'success'=>'success'
        ]);
    }






    public function autoworkprocess()
    {
        $faq = WorkProcess::orderBy('id', 'DESC')->get();
        $data = [];
        foreach ($faq as $key => $value) {
            $data[] = [
                'id'=>$value->id,
                'title'=>$value->title,
                'comment'=>$value->comment,
                'author'=>$value->getAuthor->name,
            ];
        }
        return $data;
    }

    public function autoworkprocess_steps(Request $request)
    {
        $workProcess = WorkProcess::where('id', '=', $request->work_process_id)->first();
        $workProcess_step = WorkProcessSteps::where('work_process_id', '=', $request->work_process_id)->get();
        $workProcess_step_data = [];
        foreach ($workProcess_step as $key => $value) {
            $workProcess_step_data[] = [
                'id'=>$value->id,
                'heading'=>$value->heading,
                'description'=>$value->description,
            ];
        }

        $data = [
            'workProcess'=>$workProcess,
            'workProcess_step_data'=>$workProcess_step_data,
        ];
        return $data;
    }



    public function steps_store(Request $request)
    {
        $request->validate([
            'work_process_id'=>'required',
            'heading'=>'required',
            'description'=>'required',
        ]);

        WorkProcessSteps::insert([
            'work_process_id'=>$request->work_process_id,
            'heading'=>$request->heading,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        return response()->json([
            'success'=>'success'
        ]);
    }

    public function workprocess_steps_destroy(Request $request)
    {
        WorkProcessSteps::findOrFail($request->id)->delete();
        return response()->json([
            'success'=>'success'
        ]);
    }

    public function workprocess_steps_update(Request $request)
    {
        WorkProcessSteps::where('id', $request->work_process_id)->update([
            'heading'=>$request->heading,
            'description'=>$request->description,
        ]);
        return response()->json([
            'success'=>'success'
        ]);
    }
}
