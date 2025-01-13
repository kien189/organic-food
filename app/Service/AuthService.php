<?php
namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService {
    public function register(array $data){
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }
}
