<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    public function answers(){
        return $this->hasMany(answer::class);
    }
    public function category(){
        return $this->belongsTo(category::class);
    }

    // public function likes()
    // {
    //     return $this->hasManyThrough(like::class, answer::class);
    // }

    // public function getDataAttribute()
    // {
    //     return [
    //         'question' => $this,
    //         'answers' => $this->answers()->get(),
    //         'answer_count' => $this->answers()->get()->count(),
    //         'likes' => $this->answers()->likes()->get(),
    //     ];
    // }
}
