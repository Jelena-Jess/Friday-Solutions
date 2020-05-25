<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {
        return $this -> belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }  

    public function scopeCoding($query) {
        return $query->where('category_id', 1);
     }
     
    public function scopeDesign($query) {
        return $query->where('category_id', 2);
    }

    public function scopeInspiration($query) {
        return $query->where('category_id', 3);
    }
}
