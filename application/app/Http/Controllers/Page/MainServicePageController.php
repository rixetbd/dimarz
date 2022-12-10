<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Faq;
use App\Models\FaqQA;
use App\Models\MainPages;
use App\Models\MetaSEO;
use App\Models\SubCategory;
use App\Models\ThreeEasyStep;
use App\Models\WorkProcess;
use App\Models\WorkProcessSteps;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
        $easyStepList = ThreeEasyStep::all();
        $workProcessList = WorkProcess::all();
        return view('backend.mainpages.create',[
            'subCategories'=>$subCategories,
            'faqList'=>$faqList,
            'easyStepList'=>$easyStepList,
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

        $meta = MetaSEO::insertGetId([
            'meta_title' => $request->meta_title,
            'meta_author' => $request->meta_author,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'meta_thumbnail' => $request->meta_thumbnail,
            'created_at'=>Carbon::now(),
        ]);

        if($request->hasFile('meta_thumbnail'))
        {
            $image = $request->file('meta_thumbnail');
            $filename = Str::slug($request->meta_title). '-'.time() . '.' . $image->getClientOriginalExtension();
            $path = base_path('uploads/meta/' . $filename);
            Image::make($image)->fit(400, 210)->save($path);

            MetaSEO::find($meta)->update([
                'meta_thumbnail'=>$filename,
            ]);
        }

        $about_service = [
            'about_service_left'=>$request->about_service_left,
            'about_service_right'=>$request->about_service_right,
        ];

        // $data = [
        //     'page_title'=>$request->page_title,
        //     'page_sub_title'=>$request->page_sub_title,
        //     'about_service'=>$about_service,
        //     'subcategory_id'=>$request->subcategory_id,
        //     'work_article'=>$request->work_article,
        //     'faq_id'=>$request->faq_id,
        //     'working_process'=>$request->working_process,
        //     'meta_info'=>$meta,
        //     'author'=>Auth::user()->id,
        // ];

        MainPages::insert([
            'page_title'=>$request->page_title,
            'page_sub_title'=>$request->page_sub_title,
            'slug'=>$request->slug,
            'about_service'=>json_encode($about_service),
            'subcategory_id'=>$request->subcategory_id,
            'easy_steps'=>$request->easy_steps,
            'work_article'=>$request->work_article,
            'faq_id'=>$request->faq_id,
            'working_process'=>$request->working_process,
            'meta_info'=>$meta,
            'author'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);

        return redirect()->route('backend.mainpage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mainPage = MainPages::where('id', '=', $id)->first();
        $subcategory_id = SubCategory::where('id','=', $mainPage->subcategory_id)
                                        ->select('category_id','name','slug')
                                        ->get();
        $work_article = Articles::where('id','=', $mainPage->work_article)
                                ->select('title','comment','description')
                                ->get();
        $faq_title_info = Faq::where('id','=', $mainPage->faq_id)
                        ->select('title','subtitle')
                        ->get();
        $faq_data_info = FaqQA::where('faq_id', '=', $mainPage->faq_id)
                            ->select('question','answer')
                            ->get();
        $working_process = WorkProcess::where('id','=', $mainPage->working_process)
                                        ->select('title','subtitle')
                                        ->get();
        $working_process_info = WorkProcessSteps::where('work_process_id', '=', $mainPage->working_process)
                        ->select('heading','description')
                        ->get();
        $meta_info = MetaSEO::where('id', '=', $mainPage->meta_info)
                        ->select('meta_title','meta_author','meta_description','meta_keywords','meta_thumbnail')
                        ->get();

        $easy_steps = ThreeEasyStep::where('id', '=', $mainPage->easy_steps)->first();
        $easy_stepsData[] = [
            'title'=>$easy_steps->title,
            'comment'=>$easy_steps->comment,
            'stepsdata'=>json_decode($easy_steps->stepsdata),
        ];

        $pageData = [
            'subcategory_id'=>json_decode($subcategory_id),
            'page_title'=>$mainPage->page_title,
            'slug'=>$mainPage->slug,
            'page_sub_title'=>$mainPage->page_sub_title,
            'easy_steps'=>$easy_stepsData,
            'about_service'=>json_decode($mainPage->about_service),
            'work_article'=>$work_article,
            'faq_title_info'=>$faq_title_info,
            'faq_data_info'=>$faq_data_info,
            'working_process'=>$working_process,
            'working_process_info'=>$working_process_info,
            'meta_info'=>$meta_info,
        ];

        return $pageData;
        // return json_decode($data->about_service);
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