<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.articles.create',[
            'category'=>$category
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

        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);

        Articles::insert([
            'title'=>$request->title,
            'comment'=>$request->comment,
            'author'=>Auth::user()->id,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);
        // $flasher->addSuccess('Article Saved Successfully!');
       return redirect()->route('backend.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = Articles::where('id', '=', $request->id)->first();
        return view('backend.articles.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::where('id', '=', $id)->first();
        return view('backend.articles.edit',[
            'article'=>$article
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
            'description'=>'required'
        ]);

        Articles::where('id', '=', $request->id)->update([
            'title'=>$request->title,
            'comment'=>$request->comment,
            'author'=>Auth::user()->id,
            'description'=>$request->description,
        ]);
        // $flasher->addSuccess('Article Update Successfully!');
       return redirect()->route('backend.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Articles::findOrFail($request->id)->delete();
        return response()->json([
            'success'=>'success'
        ]);
    }


    public function autoarticles()
    {
        $articles = Articles::orderBy('id', 'DESC')->get();
        foreach ($articles as $key => $value) {
            $data[] = [
                'id'=>$value->id,
                'title'=>$value->title,
                'comment'=>$value->comment,
                'author'=>$value->getAuthor->name,
            ];
        }
        return $data;
    }


}
