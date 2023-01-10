<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{

    public function index()
    {
        $data = Consultation::where('status','!=', 1)->orderBy('event_date', 'ASC')
                ->orderBy('event_start_time', 'ASC')
                ->get();

        return view('backend.consultation.index',[
            'data'=>$data,
        ]);
    }

    public function complete_index()
    {
        $data = Consultation::where('status','=', 1)->orderBy('event_date', 'ASC')
                ->orderBy('event_start_time', 'ASC')
                ->get();

        return view('backend.consultation.index',[
            'data'=>$data,
        ]);
    }


    public function store(Request $request)
    {
        Consultation::insert([
            'name'=>$request->invitee_full_name,
            'email'=>$request->invitee_email,
            'phone'=>$request->answer_1,
            'company_name'=>$request->answer_2,
            'website'=>$request->answer_3,
            'service_name'=>$request->answer_4,
            'event_date'=>($request->event_start_time != ''?date('Y-m-d', strtotime($request->event_start_time)):''),
            'event_start_time'=>($request->event_start_time != ''?date('H:i A', strtotime($request->event_start_time)):''),
            'event_end_time'=>($request->event_end_time != ''?date('H:i A', strtotime($request->event_end_time)):''),
            'time_zone'=>($request->event_start_time != ''?substr($request->event_start_time, 19):''),
            'event_type_name'=>$request->event_type_name,
            'message'=>$request->answer_5,
            'assigned_to'=>$request->assigned_to,
            'created_at'=>Carbon::now(),
        ]);
        $data = $request->all();
        return view('frontend.page.thanks-for-booking',[
                'data'=>$data,
        ]);
    }

    public function show($id)
    {
        $data = Consultation::where('id', '=',$id)->first();
        return view('backend.consultation.show',[
            'data'=>$data,
        ]);
    }
    public function update(Request $request)
    {
        $data = Consultation::where('id', '=', $request->id)->update([
            'status'=>$request->value,
        ]);

        return response()->json([
            'success'=>'success',
        ]);
    }

    public function destory($id)
    {
        Consultation::where('id', '=',$id)->delete();
        return back();
    }

    public function settings()
    {
        return "Page Will Add";
    }
}
