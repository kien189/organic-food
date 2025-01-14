<?php


namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verifyAccount($userId)
    {
        $user = User::findOrFail($userId);
        if ($user->email_verified_at) {
            return redirect()->route('home')->with('success', 'Tài khoản đã được xác nhận');
        }
        $user->email_verified_at = now();
        $user->save();
        return redirect()->route('login')->with('success', 'Tài khoản đã được kích hoạt . Vui lòng đăng nhập.');
    }
}
