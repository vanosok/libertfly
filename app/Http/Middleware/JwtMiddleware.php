<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use  Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware
{
    /** 
     * Handle an incoming request.
     * 
     * @param \illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
    */

    public function handle($request, Closure $next) {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json(['message' => 'Token invalido']);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json(['message' => 'Token expirado']);
            } else {
                return response()->json(['message' => 'Token de autorização naão encontrado']);
            }
        }

        return $next($request);
    }

}