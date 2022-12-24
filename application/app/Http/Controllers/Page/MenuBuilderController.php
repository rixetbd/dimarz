<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\MenuTable;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuName = MenuTable::all();
        return view('backend.menu-builder.index',[
            'menuName'=>$menuName,
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
        if ($request->id) {
            MenuTable::where('id','=',$request->id)->update([
                'title'=>$request->title,
            ]);
        }else{
            MenuTable::insert([
                'title'=>$request->title,
                'created_at'=>Carbon::now(),
            ]);
        }
        // return response()->json([
        //     'success'=>'success',
        // ]);
        return redirect()->route('backend.menubuild.index');
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


    public function automenubuild()
    {
        $MenuTable = MenuTable::select('id','title')->get();
        foreach ($MenuTable as $key => $value) {
            $data[] = [
                'id'=>$value->id,
                'title'=>$value->title,
            ];
        }
        return $data;
    }

    public function menutablename()
    {
        $MenuTable = MenuTable::select('id','title')->get();
        foreach ($MenuTable as $key => $value) {
            $data[] = [
                'id'=>$value->id,
                'title'=>$value->title,
            ];
        }
        return $data;
    }
}
