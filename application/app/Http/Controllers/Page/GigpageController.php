<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqQA;
use App\Models\Gigpage;
use App\Models\MainPages;
use App\Models\MetaSEO;
use App\Models\Pricing;
use App\Models\PricingList;
use App\Models\ThreeEasyStep;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
        // $request->validate([
        //     'meta_title' => 'required',
        //     'meta_author' => 'required',
        //     'meta_description' => 'required',
        //     'meta_keywords' => 'required',
        //     "title"=>'required',
        //     "sub_title"=>'required',
        //     "mainpage_id"=>'required',
        //     "short_description"=>'required',
        //     "overview_title"=>'required',
        //     "overview_info"=>'required',
        //     "easy_steps"=>'required',
        //     "faq_id"=>'required',
        // ]);

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

        $gig_id = Gigpage::insertGetId([
            "title"=>$request->title,
            "sub_title"=>$request->sub_title,
            "mainpage_id"=>$request->mainpage_id,
            "slug"=>Str::slug($request->slug),
            "short_description"=>$request->short_description,
            "overview_title"=>$request->overview_title,
            "overview_info"=>$request->overview_info,
            "why_us"=>$request->why_us,
            "easy_steps"=>$request->easy_steps,
            "faq_id"=>$request->faq_id,
            'meta_info'=>$meta,
            'author'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);

        $pack_one = [
            'pricing_name'=>$request->pricing_name_one,
            'pricing_shortinfo'=>$request->pricing_shortinfo_one,
            'pricing_duration'=>$request->pricing_duration_one,
            'pricing_price'=>$request->pricing_price_one,
        ];
        $pack_two = [
            'pricing_name'=>$request->pricing_name_two,
            'pricing_shortinfo'=>$request->pricing_shortinfo_two,
            'pricing_duration'=>$request->pricing_duration_two,
            'pricing_price'=>$request->pricing_price_two,
        ];
        $pack_three = [
            'pricing_name'=>$request->pricing_name_three,
            'pricing_shortinfo'=>$request->pricing_shortinfo_three,
            'pricing_duration'=>$request->pricing_duration_three,
            'pricing_price'=>$request->pricing_price_three,
        ];

        $pricing_table = Pricing::insertGetId([
            'gig_id'=>$gig_id,
            'title'=>$request->pricing_title,
            'subtitle'=>$request->pricing_subtitle,
            'pack_one'=>json_encode($pack_one),
            'pack_two'=>json_encode($pack_two),
            'pack_three'=>json_encode($pack_three),
            'author'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);
        // return redirect()->route('backend.gigpage.index');

        for ($i=1; $i <= 15; $i++) {
            $fieldName = 'features_name_'.$i;
            $one = 'features_'.$i.'_l1';
            $two = 'features_'.$i.'_l2';
            $three = 'features_'.$i.'_l3';
            if($request->$fieldName != ''){
                PricingList::insert([
                    'pricing_table'=>$pricing_table,
                    'title'=>$request->$fieldName,
                    'one'=>($request->$one != ''?'1':'0'),
                    'two'=>($request->$two != ''?'1':'0'),
                    'three'=>($request->$three != ''?'1':'0'),
                    'created_at'=>Carbon::now(),
                ]);
            }
        }

        $getCategory = MainPages::where('id','=', $request->mainpage_id)->first();

        Gigpage::where('id','=', $gig_id)->update([
            'pricing'=>$pricing_table,
            "category_id"=>$getCategory->getCategory->id,
        ]);

        // return $request->all();
        return redirect()->route('backend.gigpage.index');

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
        // return Gigpage::where('id','=',$id)->first();
        $mainpage = MainPages::all();
        $easyStepList = ThreeEasyStep::all();
        $faqList = Faq::all();

        $gigpage = Gigpage::where('id','=',$id)->first();
        $metaSEO = MetaSEO::where('id','=', $gigpage->meta_info)->first();
        $pricing = Pricing::where('id','=', $gigpage->pricing)->first();
        $pricingData = [
            "id"=>$pricing->id,
            "gig_id"=>$pricing->gig_id,
            "title"=>$pricing->title,
            "subtitle"=>$pricing->subtitle,
            "pack_one"=>json_decode($pricing->pack_one),
            "pack_two"=>json_decode($pricing->pack_two),
            "pack_three"=>json_decode($pricing->pack_three),
        ];


        $pricingList = PricingList::where('pricing_table','=', $pricing->id)
        ->select("id","pricing_table","title","one","two","three")->get();
        // return $data;
        return view('backend.gigpage.edit',[
            'mainpage'=>$mainpage,
            'easyStepList'=>$easyStepList,
            'faqList'=>$faqList,
            'gigpage'=>$gigpage,
            'metaSEO'=>$metaSEO,
            'pricingData'=>$pricingData,
            'pricingList'=>$pricingList,
        ]);

        return response()->json([
            'mainpage'=>$mainpage,
            'easyStepList'=>$easyStepList,
            'faqList'=>$faqList,
            'gigpage'=>$gigpage,
            'metaSEO'=>$metaSEO,
            'pricingData'=>$pricingData,
            'pricingList'=>$pricingList,
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

        $gigpage = Gigpage::where('id','=', $request->id)->first();
        if ($request->meta_id != '') {
            $MetaSEO = MetaSEO::where('id','=', $request->id)->first();

            MetaSEO::where('id','=', $request->id)->update([
                'meta_title'=>$request->meta_title,
                'meta_author'=>$request->meta_author,
                'comment'=>$request->comment,
                'meta_description'=>$request->meta_description,
            ]);

        }else{
            $MetaSEO = MetaSEO::isertGetId([
                'meta_title'=>$request->meta_title,
                'meta_author'=>$request->meta_author,
                'comment'=>$request->comment,
                'meta_description'=>$request->meta_description,
            ]);

            if($request->hasFile('meta_thumbnail'))
            {
                $image = $request->file('meta_thumbnail');
                $filename = Str::slug($request->meta_title). '-'.time() . '.' . $image->getClientOriginalExtension();
                $path = base_path('uploads/meta/' . $filename);
                Image::make($image)->fit(400, 210)->save($path);
                MetaSEO::find($MetaSEO)->update([
                    'meta_thumbnail'=>$filename,
                ]);
            }

            Gigpage::where('id','=', $request->id)->update([
                'meta_info'=>$MetaSEO
            ]);
        }

        $getCategory = MainPages::where('id','=', $request->mainpage_id)->first();

        Gigpage::where('id','=', $request->id)->update([
            "title"=>$request->title,
            "sub_title"=>$request->sub_title,
            "mainpage_id"=>$request->mainpage_id,
            "category_id"=>$getCategory->getCategory->id,
            "slug"=>Str::slug($request->slug),
            "short_description"=>$request->short_description,
            "overview_title"=>$request->overview_title,
            "overview_info"=>$request->overview_info,
            "why_us"=>$request->why_us,
            "easy_steps"=>$request->easy_steps,
            "faq_id"=>$request->faq_id,
            'author'=>Auth::user()->id,
        ]);

        $pack_one = [
            'pricing_name'=>$request->pricing_name_one,
            'pricing_shortinfo'=>$request->pricing_shortinfo_one,
            'pricing_duration'=>$request->pricing_duration_one,
            'pricing_price'=>$request->pricing_price_one,
        ];
        $pack_two = [
            'pricing_name'=>$request->pricing_name_two,
            'pricing_shortinfo'=>$request->pricing_shortinfo_two,
            'pricing_duration'=>$request->pricing_duration_two,
            'pricing_price'=>$request->pricing_price_two,
        ];
        $pack_three = [
            'pricing_name'=>$request->pricing_name_three,
            'pricing_shortinfo'=>$request->pricing_shortinfo_three,
            'pricing_duration'=>$request->pricing_duration_three,
            'pricing_price'=>$request->pricing_price_three,
        ];

        Pricing::where('id','=', $request->pricing_id)->update([
            'title'=>$request->pricing_title,
            'subtitle'=>$request->pricing_subtitle,
            'pack_one'=>json_encode($pack_one),
            'pack_two'=>json_encode($pack_two),
            'pack_three'=>json_encode($pack_three),
            'author'=>Auth::user()->id,
        ]);

        PricingList::where('pricing_table','=', $request->pricing_id)->delete();

        for ($i=0; $i <= 25; $i++) {
            $fieldName = 'features_name_'.$i;
            $one = 'features_'.$i.'_l1';
            $two = 'features_'.$i.'_l2';
            $three = 'features_'.$i.'_l3';
            if($request->$fieldName != ''){
                PricingList::insert([
                    'pricing_table'=>$request->pricing_id,
                    'title'=>$request->$fieldName,
                    'one'=>($request->$one != ''?'1':'0'),
                    'two'=>($request->$two != ''?'1':'0'),
                    'three'=>($request->$three != ''?'1':'0'),
                    'created_at'=>Carbon::now(),
                ]);
            }
        }

        // return $request->all();
        return redirect()->route('backend.gigpage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {


        $gigpage = Gigpage::where('id','=', $request->id)->first();
        $metaSEO = MetaSEO::where('id','=', $gigpage->meta_info)->first();
        $img_path = base_path('uploads/meta/'.$metaSEO->meta_thumbnail);
        if(File::exists($img_path)) {
            File::delete($img_path);
        }
        $pricing_table = Pricing::where('gig_id','=', $gigpage->id)->first();
        PricingList::where('pricing_table','=', $pricing_table->id)->delete();

        $metaSEO->delete();
        $pricing_table->delete();
        $gigpage->delete();

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
                'slug'=>$value->slug,
                'category_title'=>$value->getCategory->name,
                'main_page_title'=>$value->getMainPageTitle->page_title,
                'author'=>$value->getAuthor->name,
            ];
        }
        return $data;
    }
}
