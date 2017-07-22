<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Activo extends Model
{
    protected $table = 'v_2.activos';


    public function grupo(){

    	return $this->belongsTo('App\Models\Grupo');
    }

    public function setCreatedAtAttribute($old){
        $this->attributes['created_at'] = Carbon::now()->format('Y-m-d');
    }

    public function ubicacion_fisica(){

    	return $this->belongsTo('App\Models\UbicacionFisica');
    }

    public function detalles_depreciacion(){

    	return $this->hasMany('App\Models\DetalleDepreciacion');
    }

    public function chapas(){

    	return $this->hasMany('App\Models\Chapa');

    }

    public function etiquetas(){

    	return $this->hasMany('App\Models\Etiqueta');
    
    }

    public function activos_personas(){

    	return $this->hasMany('App\Models\ActivoPersona');
    }

    public function filial(){

        return $this->belongsTo('App\Models\Filial');
    }

    public static function getCodigo(){
        $codigo = DB::table('v_2.activos')
                ->select(DB::raw(' (count(*) + 1) as codigo, created_at '))
                ->groupBy('created_at')
                ->orderBy('created_at', 'desc')
                ->first();

         $nuevo_codigo = Carbon::now()->format('Ym');   
        
        $nuevo_codigo .= ($codigo) ? $codigo->codigo : '01';
        return $nuevo_codigo;
    }
}
