<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqQA extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getFaq(){
        return $this->belongsTo(Faq::class, 'faq_id')->withDefault([
            'id'=>'',
            'title'=>'N/A',
            'subtitle'=>'N/A',
        ]);
    }
}
