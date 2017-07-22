<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubGrupo extends Model
{
    protected $table = 'v_2.subgrupos';


   public function padre(){

   		return $this->belongsTo('App\Models\Grupo', 'id', 'grupo_padre');
	}

	public function hijo(){
		return $this->belongsTo('App\Models\Grupo', 'grupo_hijo');
	}

	public function nodo_padre(){

   		return $this->belongsTo('App\Models\Grupo','grupo_padre', 'id');
	}

	public function paridad(){
		return $this->belongsTo('App\Models\Grupo', 'grupo_hijo', 'id');
	}
}
