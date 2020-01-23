<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function books(){
        return $this->belongsToMany(\App\Book::class);
    }
    public function users(){
        return $this->belongsToMany(\App\User::class);
    }
}
