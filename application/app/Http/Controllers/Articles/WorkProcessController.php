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

        return $request->all();
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
        $activeFaq_qa = WorkProcess::where('id', $id)->first();
        $faq_qa = WorkProcessSteps::where('work_process_id', $id)->get();
        return view('backend.workprocess.show',[
            'workprocess'=>$workprocess,
            'activeFaq_qa'=>$activeFaq_qa,
            'faq_qa'=>$faq_qa,
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
}
