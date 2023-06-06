<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    use HasFactory;

    public function cat(){
        return $this->belongsTo(NewsCategory::class,'category_id');
    }
}
