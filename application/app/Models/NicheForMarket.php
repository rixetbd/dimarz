<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NicheForMarket extends Model
{
    use HasFactory;
    protected $guarded = [];

    function getIndustry(){
        return $this->belongsTo(IndustryForMarket::class, 'industry_id')->withDefault([
            'id'=>'',
            'name'=>'N/A',
        ]);
    }
}
