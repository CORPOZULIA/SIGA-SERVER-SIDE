<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
   protected $table = 'v_2.filiales';
   protected $fillable = [
   		'nombre_filial', 'codigo_filial', 'institucion_id', 'estado_id'
   ];

   public function activos(){

   		return $this->hasMany('App\Models\Activo', 'filiales_id');
	}


	public function estado(){

		return $this->belongsTo('App\Models\Estado');
	}

	public function institucion(){

		return $this->belongsTo('App\Models\Institucion');
	}


}
