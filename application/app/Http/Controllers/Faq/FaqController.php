<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqQA;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq = Faq::all();
        return view('backend.faq.create',[
            'faq'=>$faq
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

        Faq::insert([
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
        $faq = Faq::all();
        $activeFaq_qa = Faq::where('id', $id)->first();
        $faq_qa = FaqQA::where('faq_id', $id)->get();
        return view('backend.faq.show',[
            'faq'=>$faq,
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
        $faqData = Faq::where('id', '=',$request->id)->first();
        return response()->json([
            'faqData'=>$faqData
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

        Faq::where('id', '=', $request->id)->update([
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
        Faq::findOrFail($request->id)->delete();
        FaqQA::where('faq_id', '=',$request->id)->delete();
        return response()->json([
            'success'=>'success'
        ]);
    }


    public function autofaqs()
    {
        $faq = Faq::orderBy('id', 'DESC')->get();
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

    public function autofaqs_qa(Request $request)
    {
        $faq_active = Faq::where('id', '=', $request->faq_id)->first();
        $faq = FaqQA::where('faq_id', '=', $request->faq_id)->get();
        $faq_qa_data = [];
        foreach ($faq as $key => $value) {
            $faq_qa_data[] = [
                'id'=>$value->id,
                'question'=>$value->question,
                'answer'=>$value->answer,
            ];
        }
        $data = [
            'faq_active'=>$faq_active,
            'faq_qa_data'=>$faq_qa_data,
        ];
        return $data;
    }

    // store Question And Answer
    public function store_qa(Request $request)
    {
        $request->validate([
            'faq_id'=>'required',
            'question'=>'required',
            'answer'=>'required',
        ]);

        FaqQA::insert([
            'faq_id'=>$request->faq_id,
            'question'=>$request->question,
            'answer'=>$request->answer,
            'created_at'=>Carbon::now(),
        ]);

        return response()->json([
            'success'=>'success'
        ]);
    }

    public function faq_qa_destroy(Request $request)
    {
        FaqQA::findOrFail($request->id)->delete();
        return response()->json([
            'success'=>'success'
        ]);
    }

    public function faqs_qa_update(Request $request)
    {
        FaqQA::where('id', $request->faqid)->update([
            'question'=>$request->question,
            'answer'=>$request->answer,
        ]);
        return response()->json([
            'success'=>'success'
        ]);
    }
}
