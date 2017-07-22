<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'v_2.estados';

    public function grupos(){

    	return $this->hasMany('App\Models\Grupo', 'estado_grupo');
    }

    public function filiales(){

    	return $this->hasMany('App\Models\filial');
    }
}
