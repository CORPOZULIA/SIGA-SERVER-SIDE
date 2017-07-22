<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    protected $table = 'v2.etiquetas';

    public function activo(){

    	return $this->belongsTo('App\Models\Activo');
    }
}
