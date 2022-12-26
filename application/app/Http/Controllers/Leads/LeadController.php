<?php

namespace App\Http\Controllers\Leads;

use App\Http\Controllers\Controller;
use App\Models\Lead\Leads;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.leads.index');
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
        //
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
    public function destroy(Request $request)
    {
        Leads::where('id','=', $request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }


    public function autoleads()
    {

        $leads = Leads::all();

        foreach ($leads as $key => $value) {
            $data[] = [
                'id'=>$value->id,
                'person_name'=>$value->person_name,
                'title'=>$value->title,
                'email'=>Str::substr($value->email, 0, 3)."****@*****".Str::substr($value->email, -5),
                'phone'=>$value->phone,
                'company_name'=>Str::limit($value->company_name, 20),
                'industry'=>$value->industry,
                'company_size'=>$value->company_size,
                'revenue'=>$value->revenue,
                'zip_code'=>$value->zip_code,
                'city'=>$value->city,
            ];
        }
        return $data;

        // person_name
        // title
// email
// phone
// company_name
// industry
// company_size
// revenue
// zip_code
// city
// country
// website
// source_link
// source_link2
// created_at
// updated_at


    }
}
