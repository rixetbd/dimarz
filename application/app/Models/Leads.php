<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getCountry()
    {
        return $this->belongsTo(Country::class, 'country')->withDefault([
            'id'=>'',
            'name'=>'',
        ]);
    }
}
