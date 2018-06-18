<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function heores(){
    return $this->belongsToMany('App\Hero');
    }
}
