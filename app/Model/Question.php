<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    public function answers()
    {
    	return $this->hasMany('App\Model\Answer','pregunta');
    }
}
