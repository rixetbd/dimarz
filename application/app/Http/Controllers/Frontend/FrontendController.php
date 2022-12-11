<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Category;
use App\Models\Faq;
use App\Models\FaqQA;
use App\Models\Gigpage;
use App\Models\MainPages;
use App\Models\MetaSEO;
use App\Models\SubCategory;
use App\Models\ThreeEasyStep;
use App\Models\WorkProcess;
use App\Models\WorkProcessSteps;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
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
    public function destroy($id)
    {
        //
    }



    public function mainpage($id)
    {

        $mainpage = MainPages::where('slug', '=', $id)->first();
        $related_service = MainPages::where('subcategory_id', '=', $mainpage->subcategory_id)
                                    ->where('id', '!=', $mainpage->id)
                                    ->select('page_title', 'slug')->get();

        $gigs_list = Gigpage::where('mainpage_id', '=', $mainpage->id)->select('title', 'slug', 'short_description')->get();

        $data = [
            'title'=>$mainpage->page_title,
            'slug'=>$mainpage->slug,
            'category_id'=>$mainpage->getCategory->name,
            'subcategory_id'=>$mainpage->getSubcategory->name,
            'sub_title'=>$mainpage->page_sub_title,
            'related_service'=>$related_service,
            'gigs_list'=>$gigs_list,
        ];



        if (!empty($mainpage->easy_steps)) {
            $easy_steps = ThreeEasyStep::where('id', '=', $mainpage->easy_steps)->select('stepsdata')->first();
            $data += [
                'easy_steps'=>json_decode($easy_steps->stepsdata),
            ];
        }

        if (!empty($mainpage->faq_id)) {
            $faq_id = Faq::where('id', '=', $mainpage->faq_id)->select('title', 'subtitle')->first();
            $faq_data = FaqQA::where('faq_id', '=', $mainpage->faq_id)->select('question', 'answer')->get();
            $data += [
                'faq_title'=>json_decode($faq_id),
                'faq_data'=>json_decode($faq_data),
            ];
        }

        if (!empty($mainpage->working_process)) {
            $working_process = WorkProcess::where('id', '=', $mainpage->working_process)->select('title', 'subtitle')->first();
            $working_process_data = WorkProcessSteps::where('work_process_id', '=', $mainpage->working_process)->select('heading', 'description')->get();
            $data += [
                'working_process'=>json_decode($working_process),
                'working_process_data'=>json_decode($working_process_data),
            ];
        }

        if (!empty($mainpage->work_article)) {
            $work_article = Articles::where('id', '=', $mainpage->work_article)->select('title', 'description')->first();
            $data += [
                'work_article'=>json_decode($work_article),
            ];
        }
        // else{
        //     $data += ['work_article'=>[],];
        // }

        if (!empty($mainpage->meta_info)) {
            $meta_info = MetaSEO::where('id', '=', $mainpage->meta_info)
                                ->select('meta_title', 'meta_author','meta_description','meta_keywords','meta_thumbnail')->first();
            $data += [
                'meta_info'=>json_decode($meta_info),
            ];
        }


        // return $mainpage;
        // return $data;
        // return $data['work_article']->title;

        return view('frontend.mainpage',[
            'data'=>$data,
        ]);
    }











    public function autoservicelist(Request $request)
    {

        if (empty($request->id)) {
            $categories = Category::select('id','name', 'slug')->get();
            foreach ($categories as $key => $value) {
                $subCategories = SubCategory::where('category_id','=', $value->id)->select('name', 'slug', 'short_info')->get();
                $data[] = [
                    'categories_name'=>$value->name,
                    'categories_slug'=>$value->slug,
                    'subCategories_data'=>$subCategories,
                ];
            }
            // return $data;
            return response()->json([
                'data'=>$data,
            ]);
        }else{
            $categories = Category::where('id','=',$request->id)->select('id','name', 'slug')->get();
            foreach ($categories as $key => $value) {
                $subCategories = SubCategory::where('category_id','=', $value->id)->select('name', 'slug', 'short_info')->get();
                $data[] = [
                    'categories_name'=>$value->name,
                    'categories_slug'=>$value->slug,
                    'subCategories_data'=>$subCategories,
                ];
            }
            // return $data;
            return response()->json([
                'data'=>$data,
            ]);
        }
    }


    public function gigpage($slug)
    {
        $gigpage = Gigpage::where('slug', '=', $slug)->first();
        return $gigpage;
    }
}
