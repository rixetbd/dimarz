<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JobApply;
use App\Models\JobBoard;
use App\Models\Leads;
use App\Models\RuleArticle;
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
        return view('frontend.custom');
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
