<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivoPersona extends Model
{
   protected $table = 'v2.activos_persona';

 
   public function activo(){

		return $this->belongsTo('App\Models\Activo');

   }
}
