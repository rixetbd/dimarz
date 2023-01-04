<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gigpage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getMainPageTitle()
    {
        return $this->belongsTo(MainPages::class, 'mainpage_id')->withDefault([
            'id'=>'',
            'page_title'=>'N/A',
        ]);
    }

    public function getAuthor(){
        return $this->belongsTo(User::class, 'author')->withDefault([
            'id'=>'',
            'name'=>'N/A',
        ]);
    }

    public function getMainpage(){
        return $this->belongsTo(MainPages::class, 'mainpage_id')->withDefault([
            'id'=>'',
            'page_title'=>'N/A',
        ]);
    }
    public function getCategory(){
        return $this->belongsTo(Category::class, 'category_id')->withDefault([
            'id'=>'',
            'name'=>'N/A',
        ]);
    }
    public function getPrice(){
        return $this->belongsTo(Pricing::class, 'pricing')->withDefault([
            'id'=>'',
            'pack_one'=>'N/A',
            'pack_two'=>'N/A',
            'pack_three'=>'N/A',
        ]);
    }
}
