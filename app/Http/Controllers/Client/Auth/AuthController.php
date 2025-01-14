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
                'message' => 'Đăng ký tài khoản thành công . Vui lòng kiểm tra email để xác thực tài khoản'
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
            Log::info('Sai tài khoản hoặc mật khẻu');
            return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
        }
        if ($this->authService->isEmailNotVerified(Auth::user())) {
            Log::info('Vui lý kiểm tra email để xác thức tài khoản');
            return back()->with('error', 'Vui lý kiểm tra email để xác thức tài khoản');
        }
        return redirect()->route('home')->with('success', 'Đăng nhập thành công');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Đăng xuất thành công .');
    }


    public function forgotPassword()
    {
        return view('client.auth.forgot-password');
    }
}
