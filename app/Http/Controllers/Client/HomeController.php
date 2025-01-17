<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Service\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }
    public function index()
    {
        $categories = Category::query()->get();
        $listProduct = $this->homeService->getProduct();
        $newProduct = $this->homeService->getNewProduct();
        $bestSellerProduct = $this->homeService->getDiscountedProducts();
        return view('client.index')
            ->with([
                'categories' => $categories,
                'listProduct' => $listProduct,
                'newProduct' => $newProduct,
                'bestSellerProduct' => $bestSellerProduct
            ]);
    }

    public function admin()
    {
        return view('server.index');
    }
}
