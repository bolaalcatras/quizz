<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    public function book (){
        return $this->belongsTo('App\Models\book');
    }
    public function user (){
        return $this->belongsToMany('App\Models\user');
    }
}
