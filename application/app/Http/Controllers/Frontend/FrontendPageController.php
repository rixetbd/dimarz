<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gigpage;
use App\Models\JobApply;
use App\Models\JobBoard;
use App\Models\Leads;
use App\Models\MainPages;
use App\Models\RuleArticle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontendPageController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function onehalfleads()
    {
        $leads = Leads::select('person_name','title','email','phone','company_name','industry','company_size','revenue','zip_code','city','website')->take(300)->get();
        foreach ($leads as $value) {
            $data[] = [
                'person_name'=>$value->person_name,
                'title'=>$value->title,
                'email'=>Str::substr($value->email, 0, 3)."****@*****".Str::substr($value->email, -5),
                'phone'=>Str::substr($value->phone, 0, 6)."*****",
                'company_name'=>Str::limit($value->company_name, 15),
                'industry'=>$value->industry,
                'company_size'=>$value->company_size,
                'revenue'=>$value->revenue,
                'zip_code'=>$value->zip_code,
                'country'=>$value->getCountry->name,
                'city'=>$value->city,
                'website'=>Str::substr($value->website, 0, 15)."*****".Str::substr($value->website, -6),
            ];
        }
        return $data;
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function career()
    {
        $jobPost = JobBoard::orderBy('created_at','DESC')->orderBy('updated_at','DESC')->get();
        return view('frontend.career',[
            'jobPost'=>$jobPost,
        ]);
    }
    public function career_post($slug)
    {
        $data = JobBoard::where('slug','=', $slug)->first();
        return view('frontend.career_post',[
            'data'=>$data,
        ]);
    }
    public function career_store(Request $request)
    {
        JobApply::insert([
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "website"=>$request->website,
            "status"=>$request->status,
            "coverletter"=>$request->coverletter,
            // "resume"=>$request->
        ]);

        return back();
        // return $request->all();
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function orderpage()
    {
        return view('frontend.order');
    }

    public function custom_orderpage()
    {
        $mainpage = MainPages::orderBy('category_id','ASC')->get();
        return view('frontend.custom',[
            'mainpage'=>$mainpage,
        ]);
    }

    public function custom_getservice(Request $request)
    {
        $gigpage = Gigpage::where('mainpage_id','=',$request->id)->get();
        return response()->json([
            'gigpage'=>$gigpage,
        ]);
    }
    public function custom_ordersubmit(Request $request)
    {
        $data = $request->all();
        $invoiceID = '#DIMARZ'.Carbon::now()->format('ymd').random_int(100, 200);
        $category = MainPages::where('id', '=', $request->service_category_name)->first();

        $lead_generation = $request->lead_generation;
        $lead_generation += [
            'qa_04_Q'=>"Lead Industry",
            'qa_04'=>($request->lead_industry != ''?implode(", ",$request->lead_industry):'N/A'),
            'qa_05_Q'=>"Lead Column",
            'qa_05'=>implode(", ",$request->lead_column),
        ];

        $order_data = [
            'package'=>$request->package,
            'coupon_input'=>$request->coupon_input,
            'customer_fname'=>$request->customer_fname,
            'customer_lname'=>$request->customer_lname,
            'customer_email'=>$request->customer_email,
            'customer_cname'=>$request->customer_cname,
            'customer_phone'=>$request->customer_phone,
            'customer_city'=>$request->customer_city,
            'customer_country'=>$request->customer_country,
            'category'=>$category,
            'plan_brief'=>$request->plan_brief,
            'budget'=>$request->budget,
            'payment'=>$request->payment,
            'gigname'=>($request->gigname != ''?implode(", ",$request->gigname):'N/A'),
        ];

        $page_title = ($request->service_category_name != ''?$category->page_title:'0');

        if ($request->service_category_name != '') {


        if ($page_title != "" && $page_title == "SEO") {
            return view('frontend.page.invoice',[
                'order_data'=>$order_data,
                'service_data'=>$data['seo_requirement'],
                'invoiceID'=>$invoiceID,
            ]);
        } elseif ($page_title == "Email Marketing") {
            return view('frontend.page.invoice',[
                'order_data'=>$order_data,
                'service_data'=>$data['email_marketing'],
                'invoiceID'=>$invoiceID,
            ]);
        } elseif ($page_title == "Content Writing") {
            return view('frontend.page.invoice',[
                'order_data'=>$order_data,
                'service_data'=>$data['content_writing'],
                'invoiceID'=>$invoiceID,
            ]);
        } elseif ($page_title == "Online Data Entry") {
            return view('frontend.page.invoice',[
                'order_data'=>$order_data,
                'service_data'=>$data['online_data_entry'],
                'invoiceID'=>$invoiceID,
            ]);
        } elseif ($category->page_title == "Offline Data Entry") {
            return view('frontend.page.invoice',[
                'order_data'=>$order_data,
                'service_data'=>$data['online_data_entry'],
                'invoiceID'=>$invoiceID,
            ]);
        } elseif ($category->page_title == "Photo Editing") {
            return view('frontend.page.invoice',[
                'order_data'=>$order_data,
                'service_data'=>$data['photo_editing'],
                'invoiceID'=>$invoiceID,
            ]);
        } elseif ($category->page_title == "Professional Design") {
            return view('frontend.page.invoice',[
                'order_data'=>$order_data,
                'service_data'=>$data['professional_design'],
                'invoiceID'=>$invoiceID,
            ]);
        } elseif ($category->page_title == "Lead Generation") {
            return view('frontend.page.invoice',[
                'order_data'=>$order_data,
                'invoiceID'=>$invoiceID,
                'service_data'=>$lead_generation,
            ]);
        } else {
            return view('frontend.page.invoice',[
                'order_data'=>$order_data,
                'service_data'=>[],
                'invoiceID'=>$invoiceID,
            ]);
        }


    }else{
        return view('frontend.page.invoice',[
            'order_data'=>$order_data,
            'service_data'=>[],
            'invoiceID'=>$invoiceID,
        ]);
    }

        // return $basic;
        // return $data;
        return  $order_data;
        // return implode(", ",$request->lead_industry);

    }



    public function privacy_policy()
    {
        return view('frontend.page.privacy_policy');
    }
    public function terms_and_condition()
    {
        return view('frontend.page.terms_and_condition');
    }

    public function rulepage($slug)
    {
        $data = RuleArticle::where('slug','=',$slug)->first();
        if ($data) {
            return view('frontend.rulepage',[
                'data'=>$data,
            ]);
        } else {
            return redirect()->route('frontend.index');
        }
    }
}
