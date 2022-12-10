<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Gigpage;
use App\Models\MainPages;
use App\Models\ThreeEasyStep;
use Illuminate\Http\Request;

class GigpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.gigpage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainpage = MainPages::all();
        $easyStepList = ThreeEasyStep::all();
        $faqList = Faq::all();
        return view('backend.gigpage.create',[
            'mainpage'=>$mainpage,
            'easyStepList'=>$easyStepList,
            'faqList'=>$faqList,
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
        //
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
    public function destroy(Request $request)
    {
        Gigpage::where('id','=',$request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }




    public function autogigpages()
    {
        $mainPages = Gigpage::orderBy('id', 'DESC')->get();
        $data = [];
        foreach ($mainPages as $key => $value) {
            $data[] = [
                'id'=>$value->id,
                'title'=>$value->title,
                'main_page_title'=>$value->getMainPageTitle->page_title,
                'author'=>$value->getAuthor->name,
            ];
        }
        return $data;
    }
}
