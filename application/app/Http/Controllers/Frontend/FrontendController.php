<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\Articles;
use App\Models\Category;
use App\Models\Copyright;
use App\Models\Faq;
use App\Models\FaqQA;
use App\Models\Gigpage;
use App\Models\MainPages;
use App\Models\MetaSEO;
use App\Models\Pricing;
use App\Models\PricingList;
use App\Models\SubCategory;
use App\Models\Testimonial;
use App\Models\ThreeEasyStep;
use App\Models\WorkProcess;
use App\Models\WorkProcessSteps;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::orderBy('category_id', 'ASC')->get();
        $allgigs = Gigpage::orderBy('category_id', 'ASC')->get();
        $testimonial = Testimonial::select('client_name', 'location', 'text')->get();

        // affasff
        $serviceGroup = Category::all();

        foreach ($serviceGroup as $key => $value) {
            $mainPagesGrp = MainPages::where('category_id','=', $value->id)->get();
            $data = [];
            foreach ($mainPagesGrp as $key => $item) {
                $gigpage_model = Gigpage::where('mainpage_id','=', $item->id)
                ->select('id','title','slug','pricing')->get();


                $gigArr = [];
                foreach ($gigpage_model as $value) {
                    $gigArr[] = [
                          'id'=>$value->id,
                          'title'=>$value->title,
                          'slug'=>$value->slug,
                          'pricing_one'=>json_decode($value->getPrice->pack_one),
                          'pricing_two'=>json_decode($value->getPrice->pack_two),
                          'pricing_three'=>json_decode($value->getPrice->pack_three),
                    ];
                }
                $data[] = [
                    'id'=>$item->id,
                    'category_id'=>$item->category_id,
                    'category_name'=>$item->getCategory->name,
                    'page_title'=>$item->page_title,
                    'slug'=>$item->slug,
                    'short_info'=>Str::limit($item->getSubcategory->short_info, 100, '...'),
                    'gigpage_model'=>$gigArr,
                ];
            }
            $serviceGroupID[] = [
                'category_id'=>$value->id,
                'category_name'=>$value->name,
                'mainpage_data'=>$data,
            ];
        }


        return view('frontend.index',[
            'subcategories'=>$subcategories,
            'allgigs'=>$allgigs,
            'testimonial'=>$testimonial,
            'serviceGroupID'=>$serviceGroupID,
        ]);
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
            'extra_section'=>$mainpage->extra_section,
        ];

        if (!empty($mainpage->easy_steps)) {
            $easy_steps = ThreeEasyStep::where('id', '=', $mainpage->easy_steps)->select('stepsdata')->first();
            if ($easy_steps) {
                $data += [
                    'easy_steps'=>json_decode($easy_steps->stepsdata),
                ];
            }
        }

        if (!empty($mainpage->about_service)) {
            $left = json_decode($mainpage->about_service)->about_service_left;
            $right = json_decode($mainpage->about_service)->about_service_right;
            if ($left != '') {
                $about_service_left = AboutSection::where('id','=', $left)
                                        ->select('title','description')
                                        ->first();
                $data += [
                    'about_service_left'=>$about_service_left,
                ];
            }

            if ($right != '') {
                $about_service_right = AboutSection::where('id','=', $right)
                                        ->select('title','description')
                                        ->first();
                $data += [
                    'about_service_right'=>$about_service_right,
                ];
            }

        }

        if (!empty($mainpage->faq_id)) {
            $faq_id = Faq::where('id', '=', $mainpage->faq_id)->select('title', 'subtitle')->first();
            if ($faq_id) {
                $faq_data = FaqQA::where('faq_id', '=', $mainpage->faq_id)->select('question', 'answer')->get();
                if ($faq_data) {
                    $data += [
                        'faq_title'=>json_decode($faq_id),
                        'faq_data'=>json_decode($faq_data),
                    ];
                }
            }
        }

        if (!empty($mainpage->working_process)) {
            $working_process = WorkProcess::where('id', '=', $mainpage->working_process)->select('title', 'subtitle')->first();
            if ($working_process) {
                $working_process_data = WorkProcessSteps::where('work_process_id', '=', $mainpage->working_process)->select('heading', 'description')->get();
                $data += [
                    'working_process'=>json_decode($working_process),
                    'working_process_data'=>json_decode($working_process_data),
                ];
            }
        }

        if (!empty($mainpage->work_article)) {
            $work_article = Articles::where('id', '=', $mainpage->work_article)->select('title', 'description')->first();
            if ($work_article) {
                $data += [
                    'work_article'=>json_decode($work_article),
                ];
            }
        }


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
        $similer_gigpage = Gigpage::where('id', '!=', $gigpage->id)
                                    ->where('mainpage_id', '=', $gigpage->mainpage_id)
                                    ->select('mainpage_id','title','slug','short_description')->get();
        // $similer_gigpage_oth = Gigpage::where('id', '!=', $gigpage->id)
        //                             ->where('mainpage_id', '!=', $gigpage->mainpage_id)
        //                             ->select('mainpage_id','title','slug','short_description')->get();
        $similer_gigpagedata = [];

        foreach ($similer_gigpage as $key => $value) {
            $similer_gigpagedata[] = [
                "mainpage_id"=>$value->getMainpage->page_title,
                "mainpage_slug"=>$value->getMainpage->slug,
                "title"=>$value->title,
                "slug"=>$value->slug,
                "short_description"=>$value->short_description,
            ];
        }

        // foreach ($similer_gigpage_oth as $key => $value) {
        //     $similer_gigpagedata[] = [
        //         "mainpage_id"=>$value->getMainpage->page_title,
        //         "mainpage_slug"=>$value->getMainpage->slug,
        //         "title"=>$value->title,
        //         "slug"=>$value->slug,
        //         "short_description"=>$value->short_description,
        //     ];
        // }

        $data = [
            "mainpage_id"=>$gigpage->getMainpage->page_title,
            "title"=>$gigpage->title,
            "slug"=>$gigpage->slug,
            "sub_title"=>$gigpage->sub_title,
            "short_description"=>$gigpage->short_description,
            "overview_title"=>$gigpage->overview_title,
            "overview_info"=>$gigpage->overview_info,
        ];

        if (!empty($similer_gigpage)) {
            $data += [
                'similer_gigpage'=>$similer_gigpagedata,
            ];
        }
        if (!empty($gigpage->easy_steps)) {
            $easy_steps = ThreeEasyStep::where('id', '=', $gigpage->easy_steps)->select('stepsdata')->first();
            if ($easy_steps) {
                $data += [
                    'easy_steps'=>json_decode($easy_steps->stepsdata),
                ];
            }
        }

        if (!empty($gigpage->faq_id)) {
            $faq_id = Faq::where('id', '=', $gigpage->faq_id)->select('title', 'subtitle')->first();
            if ($faq_id) {
                $faq_data = FaqQA::where('faq_id', '=', $gigpage->faq_id)->select('question', 'answer')->get();
                if ($faq_data) {
                    $data += [
                        'faq_title'=>json_decode($faq_id),
                        'faq_data'=>json_decode($faq_data),
                    ];
                }
            }
        }

        if (!empty($gigpage->meta_info)) {
            $meta_info = MetaSEO::where('id', '=', $gigpage->meta_info)
                                ->select('meta_title', 'meta_author','meta_description','meta_keywords','meta_thumbnail')->first();
            $data += [
                'meta_info'=>json_decode($meta_info),
            ];
        }
        if (!empty($gigpage->pricing)) {
            $pricing = Pricing::where('gig_id', '=', $gigpage->pricing)->first();
            $p_data = [
                "title"=>$pricing->title,
                "subtitle"=>$pricing->subtitle,
                "pack_one"=>json_decode($pricing->pack_one),
                "pack_two"=>json_decode($pricing->pack_two),
                "pack_three"=>json_decode($pricing->pack_three),
            ];

            $features = PricingList::where('pricing_table', '=', $gigpage->pricing)->get();

            $data += [
                'pricing'=>$p_data,
                'features'=>$features,
            ];
        }

        $data += [
            "why_us"=>$gigpage->why_us,
        ];

        // return $data;
        return view('frontend.gigpage',[
            'data'=>$data,
        ]);
    }

    public function all_mainpage()
    {
        $gigpage = Gigpage::select('title','slug')->get();
        $copyright = Copyright::where('copyright', '!=', '')->first();

        $serviceGroup = Category::all();

        foreach ($serviceGroup as $key => $value) {
            $mainPagesGrp = MainPages::where('category_id','=', $value->id)->get();
            $data = [];
            foreach ($mainPagesGrp as $key => $item) {
                $gigpage_model = Gigpage::where('mainpage_id','=', $item->id)
                                        ->select('id','title','slug')->get();
                $data[] = [
                    'id'=>$item->id,
                    'category_id'=>$item->category_id,
                    'category_name'=>$item->getCategory->name,
                    'page_title'=>$item->page_title,
                    'slug'=>$item->slug,
                    'short_info'=>Str::limit($item->getSubcategory->short_info, 100, '...'),
                    'gigpage_model'=>$gigpage_model,
                ];
            }
            $serviceGroupID[] = [
                'category_id'=>$value->id,
                'category_name'=>$value->name,
                'mainpage_data'=>$data,
            ];
        }


        foreach ($serviceGroup as $key => $value) {
            $gigPagesGrp = Gigpage::where('category_id','=', $value->id)->get();
            $data = [];
            foreach ($gigPagesGrp as $item) {
                $data[] = [
                    'title'=>$item->title,
                    'slug'=>$item->slug,
                ];
            }

            $gigGroupID[] = [
                'category_name'=>$value->name,
                'gigpage_data'=>$data,
            ];
        }

        // return $data;
        return response()->json([
            'serviceGroupID'=>$serviceGroupID,
            'gigpage'=>$gigpage,
            'gigGroupID'=>$gigGroupID,
            'copyright'=>$copyright,
        ]);
        // return count($data);
    }
}
