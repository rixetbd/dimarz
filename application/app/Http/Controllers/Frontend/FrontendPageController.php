<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gigpage;
use App\Models\JobApply;
use App\Models\JobBoard;
use App\Models\Leads;
use App\Models\MainPages;
use App\Models\Pricing;
use App\Models\PricingList;
use App\Models\RuleArticle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
    // Brief Bye Mail
    public function brief_by_email()
    {
        $mainpage = MainPages::orderBy('category_id','ASC')->get();
        return view('frontend.briefbyemail',[
            'mainpage'=>$mainpage,
        ]);
    }

    // Brief Bye Mail Store
    public function briefbyemailstore(Request $request)
    {
        // $mainpage = MainPages::orderBy('category_id','ASC')->get();
        // return view('frontend.briefbyemail',[
        //     'mainpage'=>$mainpage,
        // ]);
        return $request->all();
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
        $general_data = [
            'customer_fname'=>$request->customer_fname,
            'customer_lname'=>$request->customer_lname,
            'customer_email'=>$request->customer_email,
            'customer_cname'=>$request->customer_cname,
            'customer_phone'=>$request->customer_phone,
            'customer_website'=>$request->customer_website,
            'customer_city'=>$request->customer_city,
            'customer_country'=>$request->customer_country,
            'plan_brief'=>$request->plan_brief,
            'budget'=>$request->budget,
            'payment'=>$request->payment,
            'invoice'=>$request->invoice_id,
        ];

        if ($request->service_id != '' && $request->package != '0') {
            $service_name = Gigpage::where('id','=',$request->service_id)->first();
            $pricing = Pricing::where('id','=', $service_name->pricing)->first();
            if ($request->package == 1) {
                $pricingList = PricingList::where('pricing_table','=', $pricing->id)->where('one','=', 1)->pluck('title');
                $general_data += [
                    'price'=>json_decode($pricing->pack_one),
                    'features'=>$pricingList,
                ];
            } elseif ($request->package == 2) {
                $pricingList = PricingList::where('pricing_table','=', $pricing->id)->where('two','=', 1)->pluck('title');
                $general_data += [
                    'price'=>json_decode($pricing->pack_two),
                    'features'=>$pricingList,
                ];
            } else {
                $pricingList = PricingList::where('pricing_table','=', $pricing->id)->where('three','=', 1)->pluck('title');
                $general_data += [
                    'price'=>json_decode($pricing->pack_three),
                    'features'=>$pricingList,
                ];
            }
            $general_data += [
                'service_id'=>$request->service_id,
                'category'=>$service_name->getCategory->name,
                'service_name'=>$service_name->title,
                'package'=>$request->package,
                'coupon_input'=>$request->coupon_input,
                'is_custom'=>0,
            ];
            Session::put('general_data', $general_data);
            return view('frontend.page.genaralinvoice',[
                'general_data'=>$general_data,
            ]);
        }else {

            $data = $request->all();
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
            'category'=>$category,
            'plan_brief'=>$request->plan_brief,
            'budget'=>$request->budget,
            'payment'=>$request->payment,
            'gigname'=>($request->gigname != ''?implode(", ",$request->gigname):'N/A'),
        ];

        $page_title = ($request->service_category_name != ''?$category->page_title:'0');
        if ($request->service_category_name != '') {
            if ($page_title != "" && $page_title == "SEO") {
                Session::put('general_data', $general_data);
                return view('frontend.page.invoice',[
                    'general_data'=>$general_data,
                    'order_data'=>$order_data,
                    'service_data'=>$data['seo_requirement'],
                    'invoiceID'=>$request->invoice_id,
                    'data'=>$data,
                ]);
            } elseif ($page_title == "Email Marketing") {
                Session::put('general_data', $general_data);
                return view('frontend.page.invoice',[
                    'general_data'=>$general_data,
                    'order_data'=>$order_data,
                    'service_data'=>$data['email_marketing'],
                    'invoiceID'=>$request->invoice_id,
                    'data'=>$data,
                ]);
            } elseif ($page_title == "Content Writing") {
                Session::put('general_data', $general_data);
                return view('frontend.page.invoice',[
                    'general_data'=>$general_data,
                    'order_data'=>$order_data,
                    'service_data'=>$data['content_writing'],
                    'invoiceID'=>$request->invoice_id,
                    'data'=>$data,
                ]);
            } elseif ($page_title == "Online Data Entry") {
                Session::put('general_data', $general_data);
                return view('frontend.page.invoice',[
                    'general_data'=>$general_data,
                    'order_data'=>$order_data,
                    'service_data'=>$data['online_data_entry'],
                    'invoiceID'=>$request->invoice_id,
                    'data'=>$data,
                ]);
            } elseif ($category->page_title == "Offline Data Entry") {
                Session::put('general_data', $general_data);
                return view('frontend.page.invoice',[
                    'general_data'=>$general_data,
                    'order_data'=>$order_data,
                    'service_data'=>$data['online_data_entry'],
                    'invoiceID'=>$request->invoice_id,
                    'data'=>$data,
                ]);
            } elseif ($category->page_title == "Photo Editing") {
                Session::put('general_data', $general_data);
                return view('frontend.page.invoice',[
                    'general_data'=>$general_data,
                    'order_data'=>$order_data,
                    'service_data'=>$data['photo_editing'],
                    'invoiceID'=>$request->invoice_id,
                    'data'=>$data,
                ]);
            } elseif ($category->page_title == "Professional Design") {
                Session::put('general_data', $general_data);
                return view('frontend.page.invoice',[
                    'general_data'=>$general_data,
                    'order_data'=>$order_data,
                    'service_data'=>$data['professional_design'],
                    'invoiceID'=>$request->invoice_id,
                    'data'=>$data,
                ]);
            } elseif ($category->page_title == "Lead Generation") {
                Session::put('general_data', $general_data);
                return view('frontend.page.invoice',[
                    'general_data'=>$general_data,
                    'order_data'=>$order_data,
                    'invoiceID'=>$request->invoice_id,
                    'service_data'=>$lead_generation,
                    'data'=>$data,
                ]);
            } else {
                Session::put('general_data', $general_data);
                return view('frontend.page.invoice',[
                    'general_data'=>$general_data,
                    'order_data'=>$order_data,
                    'service_data'=>[],
                    'invoiceID'=>$request->invoice_id,
                    'data'=>$data,
                ]);
            }


        }else{
            return view('frontend.page.invoice',[
                'order_data'=>$order_data,
                'service_data'=>[],
                'invoiceID'=>$request->invoice_id,
                'data'=>$data,
            ]);
        }

            Session::put('general_data', $general_data);
            return view('frontend.page.invoice',[
                'general_data'=>$general_data,
            ]);

            return $request->all();
        }

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
