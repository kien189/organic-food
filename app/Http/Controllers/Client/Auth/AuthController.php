<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Service\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{

    protected $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function login()
    {
        return view('client.auth.login');
    }

    public function postRegister(RegisterRequest $request)
    {
        try {
            $createUser = $this->authService->register($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Account registration successful. Please check your email to verify your account.'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function postLogin(LoginRequest $request)
    {
        $token = $this->authService->attemptLogin($request->validated());
        if (!$token) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Wrong account or password'
                ]
            );
        }
        if ($this->authService->isEmailNotVerified(Auth::user())) {
            return response()->json([
                'status' => true,
                'message' => 'Please check your email to verify your account.',
            ]);
        }
        return response()->json([
            'status' => true,
            'message' => 'Login successfully .',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Logout successfully .');
    }


    public function forgotPassword()
    {
        return view('client.auth.forgot-password');
    }
}
