<?php

namespace App\Http\Controllers\Modulos\bienes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activo;
use App\Models\Grupo;
use App\Models\Filial;
use App\Models\UbicacionFisica as UF;

use JWTAuth;
use DB;
class Nuevo extends Controller
{
    public function nuevo_activo($request){
    	$codigo = Activo::getCodigo();
    	$data = [
    		'codigo' => $codigo,
            'grupos' => Grupo::where('estado_id', 1)->get(),
    		'error' => false,
    		'mensaje' => 'RECIBIDO',
    		'token' => JWTAuth::refresh($request->token),
            'filiales' => Filial::where('estado_id', 1)->get(),
            'ubicaciones_fisicas' => UF::where('estado__ubic_fisica', 1)->get()
    	];

    	return response($data, 200)->header('Content-Type', 'application/json');
    }
}
