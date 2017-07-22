<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = 'v_2.institucion';

    public function documento(){

    	return $this->hasOne('App\Models\Documento');
    }

    public function filiales(){

    	return $this->hasMany('App\Models\Filial');
    }
}
