<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gigpage;
use App\Models\Pricing;
use App\Models\PricingList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
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

    public function cart($slug, $pack)
    {
        $invoiceID = '#DIMARZ'.Carbon::now()->format('ymdhms');
        $data = [];
        $service = Gigpage::where('slug','=', $slug)->select('id','title','slug','sub_title','pricing')->first();
        $pricing = Pricing::where('id','=', $service->pricing)->first();


        $data += [
            'pack'=>$pack,
        ];

        if ($pack == 1) {
            $pricingList = PricingList::where('pricing_table','=', $pricing->id)
                                        ->where('one','=', 1)
                                        ->pluck('title');
            $data += [
                'price'=>json_decode($pricing->pack_one),
                'pricingList'=>$pricingList,
            ];
        } elseif ($pack == 2) {
            $pricingList = PricingList::where('pricing_table','=', $pricing->id)
                                        ->where('two','=', 1)
                                        ->pluck('title');
            $data += [
                'price'=>json_decode($pricing->pack_two),
                'pricingList'=>$pricingList,
            ];
        } else {
            $pricingList = PricingList::where('pricing_table','=', $pricing->id)
                                        ->where('three','=', 1)
                                        ->pluck('title');
            $data += [
                'price'=>json_decode($pricing->pack_three),
                'pricingList'=>$pricingList,
            ];
        }

        return view('frontend.custom',[
            'service'=>$service,
            'data'=>$data,
            'invoiceID'=>$invoiceID,
        ]);
    }

    public function package_change_view(Request $request)
    {

        $data = [];
        $service = Gigpage::where('id','=', $request->service)->select('id','title','slug','sub_title','pricing')->first();
        $pricing = Pricing::where('gig_id','=', $service->pricing)->first();


        $data += [
            'pack'=>$request->package,
        ];

        if ($request->package == 1) {
            $pricingList = PricingList::where('pricing_table','=', $pricing->id)
                                        ->where('one','=', 1)
                                        ->pluck('title');
            $data += [
                'price'=>json_decode($pricing->pack_one),
                'pricingList'=>$pricingList,
            ];
        } elseif ($request->package == 2) {
            $pricingList = PricingList::where('pricing_table','=', $pricing->id)
                                        ->where('two','=', 1)
                                        ->pluck('title');
            $data += [
                'price'=>json_decode($pricing->pack_two),
                'pricingList'=>$pricingList,
            ];
        } else {
            $pricingList = PricingList::where('pricing_table','=', $pricing->id)
                                        ->where('three','=', 1)
                                        ->pluck('title');
            $data += [
                'price'=>json_decode($pricing->pack_three),
                'pricingList'=>$pricingList,
            ];
        }

        return response()->json([
            'data'=>$data,
            'service'=>$service,
        ]);
    }

    public function confirm_general_order(Request $request)
    {
        $data = Session::get('general_data');
        // $data = Session::get('general_data');
        Session::forget('general_data');
        return $data;
    }

}
