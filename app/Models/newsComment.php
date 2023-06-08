<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsComment extends Model
{
    public function post()
    {
        return $this->belongsTo(NewsPost::class);
    }
}
