<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nrctype extends Model
{
    public function nrcs(){
        $this->hasMany('App\Nrc');
    }
}
