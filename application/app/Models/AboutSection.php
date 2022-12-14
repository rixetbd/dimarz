<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getAuthor(){
        return $this->belongsTo(User::class, 'author')->withDefault([
            'id'=>'',
            'name'=>'N/A',
        ]);
    }
}
