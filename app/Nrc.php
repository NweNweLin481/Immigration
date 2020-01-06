<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nrc extends Model
{
    protected $fillable=[
        'name',
        'dist_id',
        'nrc_type_id',
        'nrc_no',
    ];

    public function disttypes(){
        $this->belongsTo('App\Disttype');
    }

    public function nrctypes(){
        $this->belongsTo('App\Nrctype');
    }

    public function pdfs(){
        $this->hasMany('App\Pdf');
    }
}
