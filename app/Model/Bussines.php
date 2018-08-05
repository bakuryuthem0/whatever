<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bussines extends Model
{
    //
    public function answers()
    {
        return $this->belongsToMany('App\Model\Answer');
    }
    public function images()
    {
        return $this->hasMany('App\Model\BussinesImage');
    }
}
