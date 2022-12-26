<?php

namespace App\Models\Lead;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    function getCountry(){
        return $this->belongsTo(Country::class, 'country_id');
    }
}