<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UbicacionFisica extends Model
{
    protected $table = 'ubicaciones_fisicas';


    public function activos(){

    	return $this->hasMany('App\Models\Activo', 'ubic_fisica_id', 'id');
    }
}
