<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
   protected $table = 'v2.operaciones';

 
   public function comprobantes(){

		return $this->hasMany('App\Models\Comprobante');

   }
}
