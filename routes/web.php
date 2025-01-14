<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\Auth\AuthController;
use App\Http\Controllers\Client\VerificationController;
use App\Http\Controllers\Admin\Auth\AuthController as AdminAuthController;


// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', [HomeController::class, 'admin']);

    Route::resources([
        'products' => ProductController::class,
        'category' => CategoryController::class
    ]);


    // Trả về một view tùy chỉnh khi không tìm thấy route
    Route::fallback(function () {
        return view('errors.server.404');
    });
});

// User
Route::group(['middleware' => ['auth', 'role:user']], function () {});


// Guest
Route::group([], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    //Auth Admin
    Route::get('/auth', [AdminAuthController::class, 'loginAdmin'])->name('login-admin');
    Route::get('/auth', [AdminAuthController::class, 'postLoginAdmin']);


    //Auth Client
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/register', [AuthController::class, 'postRegister'])->name('register');

    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');

    Route::get('shop', [ShopController::class, 'shop'])->name('shop');

    Route::get('flash-sale', [ShopController::class, 'flashSale'])->name('flash-sale');

    Route::get('blogs', [BlogController::class, 'blogs'])->name('blogs');

    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
});


Route::group(['prefix' => 'sendMail'], function () {
    Route::get('verify/{user}', [VerificationController::class, 'verifyAccount'])->middleware('signed')->name('verifyAccount');
});
