<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    protected $fillable=[
        'nrc_id',
        'file_name',
        'pdf_type',
    ];

    public function nrcs(){
        $this->belongsTo('App\Nrc');
    }
}
