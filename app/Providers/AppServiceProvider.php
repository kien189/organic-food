<?php

namespace App\Providers;

use App\Service\CartService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    protected $cartService;

    public function __construct()
    {
        $this->cartService = new CartService();
    }
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $cart = $this->cartService->getCartByUser();
        // View::share('cart', $cart);
        view()->composer('*', function ($view) {
            $cart = $this->cartService->getCartByUser();
            $view->with(compact('cart'));
        });
    }

}
