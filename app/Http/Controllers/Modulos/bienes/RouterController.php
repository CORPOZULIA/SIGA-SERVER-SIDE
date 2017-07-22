<?php

namespace App\Http\Controllers\Modulos\bienes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Modulos\bienes\Nuevo;
class RouterController extends Controller
{
    public function routing(Request $request){

    	$data = [];
    	if( $request->has('controlador') ){
    		$instance = "App\Http\Controllers\Modulos\bienes\\".$request->controlador;
    		$instance = new $instance;

    		if($request->has('accion'))
    			return call_user_func_array([$instance, $request->accion], ['request'=> $request]);
    	}
    	return response($data, 404)->header('Content-Type', 'application/json');
    	
    }
}
