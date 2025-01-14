<?php

namespace App\Service;

use App\Models\User;
use App\Notifications\VerifyEmailNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthService
{
    public function register(array $data)
    {
        return DB::transaction(function () use ($data) {
            $data['password'] = Hash::make($data['password']);
            $user =  User::create($data);
            $user->notify(new VerifyEmailNotification($user));
            $user->assignRole('user');
            return $user;
        });
    }

    public function attemptLogin(array $credentials)
    {
        return Auth::attempt($credentials);

    }

    public function isEmailNotVerified($user)
    {
        return is_null($user->email_verified_at);
    }
}
