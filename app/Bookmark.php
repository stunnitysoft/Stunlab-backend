<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    public function books(){
        return $this->belongsToMany(\App\Book::class);
    }
    public function users(){
        return $this->belongsToMany(\App\User::class);
    }
}
