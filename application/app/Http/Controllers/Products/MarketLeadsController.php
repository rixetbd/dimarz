<?php

namespace App\Http\Controllers\Products;

use App\Exports\LeadsExport;
use App\Http\Controllers\Controller;
use App\Imports\MLeadsImport;
use App\Models\LeadsForMarket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class MarketLeadsController extends Controller
{
    public function index()
    {
        return view('backend.marketplace.index');
    }

    public function create()
    {
        return view('backend.marketplace.create');
    }

    public function destroy(Request $request)
    {
        LeadsForMarket::where('id','=', $request->id)->delete();
        return response()->json([
            'success'=>'success',
        ]);
    }

    public function leadscsvupload(Request $request)
    {
        Excel::import(new MLeadsImport, $request->uploadfile);
        return redirect()->route('backend.marketleads.index');
    }


    public function autoleads()
    {
        $leads = LeadsForMarket::orderBy('company_name', 'ASC')->get();
        $data = [];
        foreach ($leads as $key => $value) {
            $data[] = [
                'id'=>$value->id,
                'person_name'=>$value->person_fname.' '.$value->person_lname,
                'title'=>$value->title,
                'email'=>$value->p_email,
                'phone'=>$value->phone_one,
                'company_name'=>Str::limit($value->company_name, 15),
                'industry'=>$value->industry,
                'niche'=>$value->niche,
                'country'=>$value->country,
                'city'=>$value->city,
            ];
        }
        return $data;
    }

    public function alldelete()
    {
        DB::table('leads_for_markets')->truncate();
        return back();
    }

    public function export()
    {
        return Excel::download(new LeadsExport, 'leads-for-backup.xlsx');
    }

}
