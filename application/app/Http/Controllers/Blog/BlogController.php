<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\MetaSEO;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.blog.create',[
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

        $meta = MetaSEO::insertGetId([
            'meta_title' => $request->meta_title,
            'meta_author' => $request->meta_author,
            'comment' => $request->meta_comment,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
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

        $blog = Blog::insertGetId([
            'title'=>$request->title,
            'slug'=>($request->slug != ''?Str::slug($request->slug):Str::slug($request->title)),
            'comment'=>$request->comment,
            'meta_info'=>$meta,
            'author'=>Auth::user()->id,
            'description'=>$request->description,
            'created_at'=>Carbon::now(),
        ]);

        if($request->hasFile('thumbnail'))
        {
            $image = $request->file('thumbnail');
            $thumbnailname = Str::slug($request->meta_title). '-'.time() . '.' . $image->getClientOriginalExtension();
            $path = base_path('uploads/blog/' . $thumbnailname);
            Image::make($image)->fit(400, 210)->save($path);
            Blog::find($blog)->update([
                'thumbnail'=>$thumbnailname,
            ]);
        }
        // thumbnail
       return redirect()->route('backend.blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = Blog::where('id', '=', $request->id)->first();
        return view('backend.blog.show',[
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
        $blog = Blog::where('id', '=', $id)->first();
        $meta = MetaSEO::where('id', '=', $blog->meta_info)->first();
        return view('backend.blog.edit',[
            'article'=>$blog,
            'meta'=>$meta,
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

        $blog = Blog::where('id', '=', $request->id)->first();

        MetaSEO::where('id', '=', $blog->meta_info)->update([
            'meta_title' => $request->meta_title,
            'meta_author' => $request->meta_author,
            'comment' => $request->meta_comment,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        if ($blog) {
            $meta = MetaSEO::where('id','=',$blog->meta_info)->first();
            $meta_img = base_path('uploads/meta/'.$meta->meta_thumbnail);
            if ($meta) {
                if($request->hasFile('meta_thumbnail'))
                {
                    if(File::exists($meta_img)) {
                        File::delete($meta_img);
                    }
                    $image = $request->file('meta_thumbnail');
                    $filename = Str::slug($request->meta_title). '-'.time() . '.' . $image->getClientOriginalExtension();
                    $path = base_path('uploads/meta/' . $filename);
                    Image::make($image)->fit(400, 210)->save($path);
                    MetaSEO::where('id','=',$blog->meta_info)->update([
                        'meta_thumbnail'=>$filename,
                    ]);
                }
            }

            if($request->hasFile('thumbnail'))
            {
                $img_path = base_path('uploads/blog/'.$blog->thumbnail);
                if(File::exists($img_path)) {
                    File::delete($img_path);
                }

                $image = $request->file('thumbnail');
                $thumbnailname = Str::slug($request->meta_title). '-'.time() . '.' . $image->getClientOriginalExtension();
                $path = base_path('uploads/blog/' . $thumbnailname);
                Image::make($image)->fit(400, 210)->save($path);
                Blog::where('id', '=', $request->id)->update([
                    'thumbnail'=>$thumbnailname,
                ]);
            }
        }

        Blog::where('id', '=', $request->id)->update([
            'title'=>$request->title,
            'slug'=>($request->slug != ''?Str::slug($request->slug):Str::slug($request->title)),
            'comment'=>$request->comment,
            'author'=>Auth::user()->id,
            'description'=>$request->description,
        ]);

        // $flasher->addSuccess('Article Update Successfully!');
       return redirect()->route('backend.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $blog = Blog::where('id','=',$request->id)->first();
        if ($blog) {
            $meta = MetaSEO::where('id','=',$blog->meta_info)->first();
            $meta_img = base_path('uploads/meta/'.$meta->meta_thumbnail);
            if ($meta) {
                if(File::exists($meta_img)) {
                    File::delete($meta_img);
                }
                $meta->delete();
            }

            $img_path = base_path('uploads/blog/'.$blog->thumbnail);
            if(File::exists($img_path)) {
                File::delete($img_path);
            }
            $blog->delete();
        }
        return response()->json([
            'success'=>'success'
        ]);
    }


    public function autoblogs()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        $data = [];
        foreach ($blogs as $key => $value) {
            $data[] = [
                'id'=>$value->id,
                'title'=>$value->title,
                'comment'=>$value->comment,
                'author'=>$value->getAuthor->name,
                'thumbnail'=>$value->thumbnail,
            ];
        }
        return $data;
    }

}
