<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
class AuthenticateController extends Controller
{
    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 200);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        $user = User::where('email' , $request->email)->first();

        // all good so return the token
        $credentials = [
        	'token' => $token,
        	'mensaje' => "Bienvenido al sistema ".$user->email,
        	"user" => [
        		"nombre" => $user->name,
        		"picture" => $user->imagen
        	] ,
        ];
        return response()->json(compact('credentials'));
    }
}