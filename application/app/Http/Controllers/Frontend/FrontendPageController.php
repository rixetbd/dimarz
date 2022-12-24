<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\RuleArticle;
use Illuminate\Http\Request;

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

    public function about()
    {
        return view('frontend.about');
    }

    public function career()
    {
        return view('frontend.career');
    }

    public function blog()
    {
        return view('frontend.blog');
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
