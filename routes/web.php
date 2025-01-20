<?php

use App\Http\Controllers\Client\CartController;
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
use App\Http\Controllers\Client\WishlistController;
use App\Http\Controllers\Client\OrderController;
// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', [HomeController::class, 'admin'])->name('dashboard');

    Route::resources([
        'product' => ProductController::class,
        'category' => CategoryController::class
    ]);


    // Trả về một view tùy chỉnh khi không tìm thấy route
    Route::fallback(function () {
        return view('errors.server.404');
    });
});

// User
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
    Route::post('/update-cart', [CartController::class, 'updateCart'])->name('update-cart');
    Route::get('/destroy-cart/{id}', [CartController::class, 'destroyCart'])->name('destroy-cart');
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [OrderController::class, 'postCheckout']);
    Route::get('/wishlist',[WishlistController::class,'wishlist'])->name('wishlist');
});


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

    Route::get('/{category}/{slug}',[ShopController::class, 'productDetail'])->name('product-detail');

    Route::get('/shop/{category}/?{discount}',[ShopController::class, 'filler'])->name('filler');
});


Route::group(['prefix' => 'sendMail'], function () {
    Route::get('verify/{user}', [VerificationController::class, 'verifyAccount'])->middleware('signed')->name('verifyAccount');
});
Route::fallback(function () {
    return view('errors.client.404');
});
