<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = 'v2.tipos_documentos';

    public function comprobantes(){

    	return $this->hasMany('App\Models\Comprobante');
    }
}
