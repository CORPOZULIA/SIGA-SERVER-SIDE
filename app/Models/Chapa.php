<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapa extends Model
{
    protected $table = 'v2.chapas';


    public function activo(){

    	return $this->belongsTo('App\Models\Activo');
    	
    }
}