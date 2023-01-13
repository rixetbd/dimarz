<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CartModel;
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
        $data = CartModel::all();
        return view('backend.consultation.ordergeneral',[
            'data'=>$data,
        ]);
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

        CartModel::insert([
            'c_fname'=>$data['customer_fname'],
            'c_lname'=>$data['customer_lname'],
            'c_email'=>$data['customer_email'],
            'c_phone'=>(array_key_exists('customer_cphone', $data)?$data['customer_cphone']:"N/A"),
            'company'=>(array_key_exists('customer_cname', $data)?$data['customer_cname']:"N/A"),
            'website'=>(array_key_exists('customer_website', $data)?$data['customer_website']:"N/A"),
            'website'=>(array_key_exists('customer_website', $data)?$data['customer_website']:"N/A"),
            'city'=>(array_key_exists('customer_city', $data)?$data['customer_city']:"N/A"),
            'country'=>(array_key_exists('customer_country', $data)?$data['customer_country']:"N/A"),
            'brief'=>(array_key_exists('plan_brief', $data)?$data['plan_brief']:"N/A"),
            'budget'=>(array_key_exists('budget', $data)?$data['budget']:"N/A"),
            'payment'=>(array_key_exists('payment', $data)?$data['payment']:"N/A"),
            'invoice'=>$data['invoice'],
            'service_id'=>$data['service_id'],
            'category'=>$data['category'],
            'package'=>$data['package'],
            'coupon'=>$data['coupon_input'],
            'is_custom'=>$data['is_custom'],
            'created_at'=>Carbon::now(),
        ]);
        // $data = Session::get('general_data');
        Session::forget('general_data');

        return redirect()->route('frontend.index');
    }

}
