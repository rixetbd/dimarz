<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPages extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getSubcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id')->withDefault([
            'id'=>'',
            'name'=>'N/A',
        ]);
    }

    public function getAuthor(){
        return $this->belongsTo(User::class, 'author')->withDefault([
            'id'=>'',
            'name'=>'N/A',
        ]);
    }
}
