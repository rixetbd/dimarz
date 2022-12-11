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
    public function store(Request $request, NotyfFactory $flasher)
    {
        $validator =  Validator::make($request->all(), [
            'name'=>'required|unique:role_permissions,name',
        ]);

        if ($validator->fails()) {
            $flasher->addError('Action Unsuccessfully!');
            return back();
        } else {
            RolePermission::insert([
                "name"=>$request->name,
                "articles"=>($request->articles == 'on'?1:0),
                "attendance"=>($request->attendance == 'on'?1:0),
                "category"=>($request->category == 'on'?1:0),
                "employee"=>($request->employee == 'on'?1:0),
                "faq"=>($request->faq == 'on'?1:0),
                "gigpage"=>($request->gigpage == 'on'?1:0),
                "mainpage"=>($request->mainpage == 'on'?1:0),
                "seo"=>($request->seo == 'on'?1:0),
                "salary"=>($request->salary == 'on'?1:0),
                "settings"=>($request->settings == 'on'?1:0),
                "users"=>($request->users == 'on'?1:0),
                "workprocess"=>($request->workprocess == 'on'?1:0),
                "created_at"=>Carbon::now(),
            ]);
            $flasher->addSuccess('Action Successfully!');
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



    public function autoroles()
    {
        $data = RolePermission::all();
        return $data;
    }
}
