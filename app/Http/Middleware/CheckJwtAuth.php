<?php 
namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class CheckJwtAuth
{
    public function handle($request, Closure $next)
    {
        // Lấy token từ session
        $token = session('jwt_token');

        if (!$token) {
            return response()->json(['message' => 'Token not found'], 401);
        }

        try {
            // Xác thực token
            $user = JWTAuth::setToken($token)->authenticate();

            if (!$user) {
                return response()->json(['message' => 'User not found'], 404);
            }
        } catch (JWTException $e) {
            return response()->json(['message' => 'Token is invalid or expired'], 401);
        }

        return $next($request);
    }
}

