<?php

use App\Http\Controllers\Client\Auth\AuthController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ShopController;
use Illuminate\Support\Facades\Route;


// Admin
Route::group(['prefix' => 'admin' , 'middleware' => ['auth','admin']], function () {

    Route::fallback(function () {
        // Trả về một view tùy chỉnh khi không tìm thấy route
        return response()->view('errors.server.404', [], 404);
    });
});
// User
Route::group(['middleware' => 'auth'], function () {

});
// Guest
Route::group([], function () {
   Route::get('/',[HomeController::class,'index'])->name('home');

   //Auth
   Route::get('/login',[AuthController::class,'login'])->name('login');

   Route::post('/register', [AuthController::class, 'postRegister'])->name('register');

   Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');

   Route::get('shop',[ShopController::class,'shop'])->name('shop');

   Route::get('flash-sale',[ShopController::class,'flashSale'])->name('flash-sale');

   Route::get('blogs',[BlogController::class ,'blogs'])->name('blogs');

    Route::get('/contact',[ContactController::class,'contact'])->name('contact');

   Route::get('/admin',[HomeController::class,'admin']);
});


