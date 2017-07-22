<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
class AuthenticateApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (TokenExpiredException $e) {
            $respuesta = [
                "error" => true,
                "tipo_error" => 'token_expired',
                "mensaje" => "Su session ha terminado, debe volver a ingresar."
            ];
            return response($respuesta, 200)
                ->header("Content-Type", 'application/json');

        } 

        // the token is valid and we have found the user via the sub claim
        
        return $next($request);
    }
}
