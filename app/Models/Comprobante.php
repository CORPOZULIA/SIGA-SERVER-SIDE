<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    protected $table = 'v2.comprobantes';


    public function activo(){

    	return $this->belongsTo('App\Models\Activo');
    }

    public function tipo_documento(){

    	return $this->belongsTo('App\Models\TipoDocumento');
    }

   

    public function institucion(){

    	return $this->hasOne('App\Models\Institucion');
    }
}
