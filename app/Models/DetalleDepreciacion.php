<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleDepreciacion extends Model
{
    protected $table = 'v2.detalle_depreciacion';


    public function activo(){

    	return $this->belongsTo('App\Models\Activo');
   
    }
}
