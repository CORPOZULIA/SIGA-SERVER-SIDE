<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
   protected $table = 'v_2.grupos';
   protected $fillable = [
   	 'id', 
   	 'nombre_grupo', 
   	 'codigo_grupo',
   	 'spg_cuenta',
   	 'filial_id',
   	 'estado_id'
   ];

   public function activos(){
   	return $this->hasMany('App\Models\Activo');
	}

	public function hijos(){
		return $this->hasMany('App\Models\SubGrupo', 'grupo_padre', 'id');
	}

	public function grupo_padre(){

		return $this->hasOne('App\Models\SubGrupo', 'grupo_hijo', 'id');
	}


	public function estado(){

		return $this->belongsTo('App\Models\Estado','estado_grupo');
	}


}
