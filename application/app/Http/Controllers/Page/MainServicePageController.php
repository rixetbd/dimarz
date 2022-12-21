<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\Articles;
use App\Models\Category;
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
use Illuminate\Support\Facades\File;
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
        $categories = Category::orderBy('name', 'ASC')->get();
        $subCategories = SubCategory::all();
        $aboutSectionLeft = AboutSection::where('section_position', '=', 0)->orderBy('title', 'ASC')->get();
        $aboutSectionRight = AboutSection::where('section_position', '=', 1)->orderBy('title', 'ASC')->get();
        $faqList = Faq::orderBy('comment', 'ASC')->get();
        $articlesList = Articles::all();
        $easyStepList = ThreeEasyStep::all();
        $workProcessList = WorkProcess::orderBy('comment', 'ASC')->get();
        return view('backend.mainpages.create',[
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'aboutSectionLeft'=>$aboutSectionLeft,
            'aboutSectionRight'=>$aboutSectionRight,
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
            'slug'=>Str::slug($request->slug),
            'about_service'=>json_encode($about_service),
            'category_id'=>$request->category_id,
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
        $pageData = [];
        $mainPage = MainPages::where('id', '=', $id)->first();
        $subcategory_id = SubCategory::where('id','=', $mainPage->subcategory_id)
                                        ->select('category_id','name','slug')
                                        ->get();

        $pageData += [
            'subcategory_id'=>json_decode($subcategory_id),
            'page_title'=>$mainPage->page_title,
            'slug'=>$mainPage->slug,
            'page_sub_title'=>$mainPage->page_sub_title,
        ];

        if (!empty($mainPage->easy_steps)) {
            $easy_steps = ThreeEasyStep::where('id', '=', $mainPage->easy_steps)->first();
            $easy_stepsData[] = [
                'title'=>$easy_steps->title,
                'comment'=>$easy_steps->comment,
                'stepsdata'=>json_decode($easy_steps->stepsdata),
            ];
            $pageData += [
                'easy_steps'=>$easy_stepsData,
            ];
        }

        if (!empty($mainPage->about_service)) {

            $left = json_decode($mainPage->about_service)->about_service_left;
            if ($left != '') {
                $about_service_left = AboutSection::where('id','=', $left)
                                        ->select('title','description')
                                        ->first();
                $pageData += [
                    'about_service_left'=>$about_service_left,
                ];
            }

            if (!empty(json_encode(json_decode($mainPage->about_service)->about_service_right))) {
                $about_service_right = AboutSection::where('id','=', json_encode(json_decode($mainPage->about_service)->about_service_right))
                                        ->select('title','description')
                                        ->first();
                $pageData += [
                    'about_service_right'=>$about_service_right,
                ];
            }

        }

        if (!empty($mainPage->work_article)) {
            $work_article = Articles::where('id','=', $mainPage->work_article)
            ->select('title','comment','description')
            ->get();
            $pageData +=[
                'work_article'=>$work_article,
            ];
        }

        if (!empty($mainPage->faq_id)) {
            $faq_title_info = Faq::where('id','=', $mainPage->faq_id)
            ->select('title','subtitle')
            ->get();
            $faq_data_info = FaqQA::where('faq_id', '=', $mainPage->faq_id)
            ->select('question','answer')
            ->get();
            $pageData += [
                'faq_title_info'=>$faq_title_info,
                'faq_data_info'=>$faq_data_info,
            ];
        }

        if (!empty($mainPage->working_process)) {
            $working_process = WorkProcess::where('id','=', $mainPage->working_process)
            ->select('title','subtitle')
            ->get();
            $working_process_info = WorkProcessSteps::where('work_process_id', '=', $mainPage->working_process)
            ->select('heading','description')
            ->get();
            $pageData +=[
                'working_process'=>$working_process,
                'working_process_info'=>$working_process_info,
            ];
        }
        if (!empty($mainPage->meta_info)) {
            $meta_info = MetaSEO::where('id', '=', $mainPage->meta_info)
            ->select('meta_title','meta_author','meta_description','meta_keywords','meta_thumbnail')
            ->get();
            $pageData +=[
                'meta_info'=>$meta_info,
            ];
        }

        // return json_encode(json_decode($mainPage->about_service)->about_service_left);
        // return json_encode(json_decode($mainPage->about_service)->about_service_left);
        // return $left;
        // return $about_service_left;
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
        $mainpage = MainPages::where('id','=',$id)->first();
        $meta_info = MetaSEO::where('id','=', $mainpage->meta_info)->first();
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $aboutSectionLeft = AboutSection::where('section_position', '=', 0)->get();
        $aboutSectionRight = AboutSection::where('section_position', '=', 1)->get();
        $faqList = Faq::all();
        $articlesList = Articles::all();
        $easyStepList = ThreeEasyStep::all();
        $workProcessList = WorkProcess::all();
        return view('backend.mainpages.edit',[
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'aboutSectionLeft'=>$aboutSectionLeft,
            'aboutSectionRight'=>$aboutSectionRight,
            'faqList'=>$faqList,
            'easyStepList'=>$easyStepList,
            'articlesList'=>$articlesList,
            'workProcessList'=>$workProcessList,
            'mainpage'=>$mainpage,
            'meta_info'=>$meta_info,
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
        // return $request->all();

        if ($request->meta_id != '') {
            MetaSEO::where('id', '=', $request->meta_id)->update([
                'meta_title' => $request->meta_title,
                'meta_author' => $request->meta_author,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
            ]);
            if($request->hasFile('meta_thumbnail'))
            {
                $metaSEO = MetaSEO::where('id', '=', $request->meta_id)->first();
                $img_path = base_path('uploads/meta/'.$metaSEO->meta_thumbnail);
                if(File::exists($img_path)) {
                    File::delete($img_path);
                }
                $image = $request->file('meta_thumbnail');
                $filename = Str::slug($request->meta_title). '-'.time() . '.' . $image->getClientOriginalExtension();
                $path = base_path('uploads/meta/' . $filename);
                Image::make($image)->fit(400, 210)->save($path);

                MetaSEO::where('id', '=', $request->meta_id)->update([
                    'meta_thumbnail'=>$filename,
                ]);
            }
        }else{
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
            MainPages::where('id', '=', $request->id)->update([
                'meta_info'=>$meta,
            ]);
        }

        $about_service = [
            'about_service_left'=>$request->about_service_left,
            'about_service_right'=>$request->about_service_right,
        ];

        MainPages::where('id', '=', $request->id)->update([
            'page_title'=>$request->page_title,
            'page_sub_title'=>$request->page_sub_title,
            'slug'=>Str::slug($request->slug),
            'about_service'=>json_encode($about_service),
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'easy_steps'=>$request->easy_steps,
            'work_article'=>$request->work_article,
            'faq_id'=>$request->faq_id,
            'working_process'=>$request->working_process,
            'author'=>Auth::user()->id,
        ]);

        return redirect()->route('backend.mainpage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $mainPages = MainPages::where('id', '=', $request->id)->first();
        $MetaSEO = MetaSEO::where('id', '=', $mainPages->meta_info)->first();
        if ($MetaSEO) {
            $img_path = base_path('uploads/meta/'.$MetaSEO->meta_thumbnail);
            if(File::exists($img_path)) {
                File::delete($img_path);
            }
            $MetaSEO->delete();
        }
        $mainPages->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }




    public function automainpage()
    {
        $mainPages = MainPages::orderBy('category_id', 'ASC')->get();
        $data = [];
        foreach ($mainPages as $key => $value) {
            $data[] = [
                'id'=>$value->id,
                'page_title'=>$value->page_title,
                'category_id'=>$value->getCategory->name,
                'subcategory_id'=>$value->getSubcategory->name,
                'author'=>$value->getAuthor->name,
            ];
        }
        return $data;
    }

    public function slug_check(Request $request)
    {
        if ($request->id) {
            $mainPages_c = MainPages::where('id','=',$request->id)
                            ->where('slug','=',$request->slug)->first();
            $mainPages_n = MainPages::where('id','!=',$request->id)
                            ->where('slug','=',$request->slug)->first();
            if ($mainPages_c) {
                return response()->json(['status'=>0]);
            }
            if ($mainPages_n) {
                return response()->json(['status'=>1]);
            }
        }else{
            $mainPages = MainPages::where('slug','=',$request->slug)->first();
            if ($mainPages) {
                return response()->json(['status'=>1]);
            }else{
                return response()->json(['status'=>0]);
            }
        }
    }
}
