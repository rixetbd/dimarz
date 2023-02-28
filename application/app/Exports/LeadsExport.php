<?php

namespace App\Exports;

use App\Models\LeadsForMarket;
use Maatwebsite\Excel\Concerns\FromCollection;

class LeadsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LeadsForMarket::all();
    }
}
