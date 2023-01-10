<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\RolePermission;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Flasher\Notyf\Prime\NotyfFactory;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.role.index');
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
        $validator =  Validator::make($request->all(), [
            'name'=>'required|unique:role_permissions,name',
        ]);

        if ($validator->fails()) {
            return back();
        } else {
            RolePermission::insert([
                "name"=>$request->name,
                "articles"=>($request->articles != ''?$request->articles:0),
                "attendance"=>($request->attendance != ''?$request->attendance:0),
                "category"=>($request->category != ''?$request->category:0),
                "employee"=>($request->employee != ''?$request->employee:0),
                "consultation"=>($request->consultation != ''?$request->consultation:0),
                "faq"=>($request->faq != ''?$request->faq:0),
                "gigpage"=>($request->gigpage != ''?$request->gigpage:0),
                "mainpage"=>($request->mainpage != ''?$request->mainpage:0),
                "seo"=>($request->seo != ''?$request->seo:0),
                "salary"=>($request->salary != ''?$request->salary:0),
                "settings"=>($request->settings != ''?$request->settings:0),
                "users"=>($request->users != ''?$request->users:0),
                "workprocess"=>($request->workprocess != ''?$request->workprocess:0),
                "created_at"=>Carbon::now(),
            ]);
            return back();
        }
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
    public function update(Request $request)
    {
        RolePermission::find($request->id)->update([
            "name"=>$request->name,
            "articles"=>($request->articles != ''?$request->articles:0),
            "attendance"=>($request->attendance != ''?$request->attendance:0),
            "category"=>($request->category != ''?$request->category:0),
            "employee"=>($request->employee != ''?$request->employee:0),
            "consultation"=>($request->consultation != ''?$request->consultation:0),
            "faq"=>($request->faq != ''?$request->faq:0),
            "gigpage"=>($request->gigpage != ''?$request->gigpage:0),
            "mainpage"=>($request->mainpage != ''?$request->mainpage:0),
            "seo"=>($request->seo != ''?$request->seo:0),
            "salary"=>($request->salary != ''?$request->salary:0),
            "settings"=>($request->settings != ''?$request->settings:0),
            "users"=>($request->users != ''?$request->users:0),
            "workprocess"=>($request->workprocess != ''?$request->workprocess:0),
        ]);
        return response()->json([
            'success'=>'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        RolePermission::find($request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }



    public function autoroles()
    {
        $data = RolePermission::all();
        return $data;
    }

    public function getrole(Request $request)
    {
        $data = RolePermission::where('id', '=', $request->id)->first();
        return $data;
    }
}
