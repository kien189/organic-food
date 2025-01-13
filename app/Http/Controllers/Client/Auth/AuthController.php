<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Service\AuthService;
use Illuminate\Http\Request;

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
        $createUser = $this->authService->register($request->all());
        if ($createUser) {
            return redirect()->route('home');
        }else{
            return redirect()->back();
        }
    }

    public function postLogin() {}

    public function forgotPassword()
    {
        return view('client.auth.forgot-password');
    }
}
