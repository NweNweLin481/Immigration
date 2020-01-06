<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disttype extends Model
{
    public function nrcs(){
        $this->hasMany('App\Nrc');
    }
}
