<?php

namespace App\Http\Controllers\Desktop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class App extends Controller
{
    
    public function index(Request $request){
    	$data = [
    		"error" => false,
    		"mensaje" => "Solicitud aceptada",
    	];

    	return response($data, 200)
    			->header("Content-Type", "application/json");
    }

    public function usuario(){
    	$data = [
    		"error" => false,
    		"mensaje" => "Solicitud aceptada",
    		"imagen" => "asdasds",
    		'nombre_usuario' => 'Giovanny José',
    		'apellido_usuario' => 'Avila escorcia',
    	];

    	return response($data, 200)
    			->header("Content-Type", "application/json");
 	
    }

}
