<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\RuleArticle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RuleArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.rules.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.rules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'rules_name'=>'required',
            'description'=>'required',
        ]);
        RuleArticle::insert([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title.rand(100,200)),
            'rules_name'=>$request->rules_name,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('backend.rules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = RuleArticle::where('id','=',$id)->first();
        return view('backend.rules.edit',[
            'data'=>$data,
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
        $request->validate([
            'title'=>'required',
            'rules_name'=>'required',
            'description'=>'required',
        ]);

        RuleArticle::where('id','=',$request->id)->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title.rand(100,200)),
            'rules_name'=>$request->rules_name,
            'description'=>$request->description,
        ]);
        return redirect()->route('backend.rules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        RuleArticle::where('id','=',$request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }

    public function allrulearticle()
    {
        $alltestimonial = RuleArticle::all();
        $data = [];
        foreach ($alltestimonial as $value) {
            $data[] = [
                'id'=>$value->id,
                'title'=>$value->title,
                'slug'=>$value->slug,
                'rules_name'=>$value->rules_name,
                'description'=>Str::limit($value->description, 70),
                'created_at'=>($value->updated_at!=''?$value->updated_at->diffForHumans():$value->created_at->diffForHumans()),
            ];
        }
        return $data;
    }
}
