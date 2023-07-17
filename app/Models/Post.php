<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
   

     public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('upload/' . $this->image);
        }
        return asset('images/favicon.png');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getUrlAttribute()
    {
        return route('posts.show', $this->slug);
    }
}

