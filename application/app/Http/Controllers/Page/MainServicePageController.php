<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Faq;
use App\Models\MainPages;
use App\Models\SubCategory;
use App\Models\WorkProcess;
use Illuminate\Http\Request;

class MainServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.mainpages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subCategories = SubCategory::all();
        $faqList = Faq::all();
        $articlesList = Articles::all();
        $workProcessList = WorkProcess::all();
        return view('backend.mainpages.create',[
            'subCategories'=>$subCategories,
            'faqList'=>$faqList,
            'articlesList'=>$articlesList,
            'workProcessList'=>$workProcessList,
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
        //
    }






    public function automainpage()
    {
        $mainPages = MainPages::orderBy('id', 'DESC')->get();
        $data = [];
        foreach ($mainPages as $key => $value) {
            $data[] = [
                'id'=>$value->id,
                'page_title'=>$value->page_title,
                'subcategory_id'=>$value->getSubcategory->name,
                'author'=>$value->getAuthor->name,
            ];
        }
        return $data;
    }
}
