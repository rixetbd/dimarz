<?php

namespace App\Http\Controllers\MailBox;

use App\Http\Controllers\Controller;
use App\Models\BriefMail;
use App\Models\MainPages;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactMailController extends Controller
{

    public function briefbyemailstore(Request $request)
    {
        BriefMail::insert([
            'firstname'=>$request->customer_fname,
            'lastname'=>$request->customer_lname,
            'email'=>$request->customer_email,
            'company'=>$request->customer_cname,
            'phone'=>$request->customer_phone,
            'website'=>$request->customer_website,
            'city'=>$request->customer_city,
            'country'=>$request->customer_country,
            'service'=>($request->service_category_name != ''?implode(',',$request->service_category_name):''),
            'message'=>$request->plan_brief,
            'budget'=>$request->budget,
            'referby'=>$request->referby,
            'joinemail'=>$request->joinemail,
            'created_at'=>Carbon::now(),
        ]);

        return redirect()->route('frontend.index');
    }

    public function index()
    {
        $data = BriefMail::all();

        return view('backend.briefmail.index',[
            'data'=>$data,
        ]);
    }

    public function show($id)
    {
        $data = BriefMail::where('id', '=',$id)->first();
        $servicedata = [];
        $arr = explode(',',$data->service);
        foreach ($arr as $key => $value) {
            $service = MainPages::where('id', '=', $value)->first();
            $servicedata[] = $service->page_title;
        }

        return view('backend.briefmail.show',[
            'data'=>$data,
            'servicedata'=>$servicedata,
        ]);

        // return $servicedata;

    }
    public function update(Request $request)
    {
        $data = BriefMail::where('id', '=', $request->id)->update([
            'status'=>$request->value,
        ]);

        return response()->json([
            'success'=>'success',
        ]);
    }

    public function destory($id)
    {
        BriefMail::where('id', '=',$id)->delete();
        return back();
    }

}
