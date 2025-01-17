<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\HomeService;
use App\Service\ShopService;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    protected $shopService;

    public function __construct(ShopService $shopService)
    {
        $this->shopService = $shopService;
    }
    public function shop()
    {
        $products = $this->shopService->getProduct();
        return view('client.shop', compact('products'));
    }

    public function flashSale()
    {
        return view('client.flash-sale');
    }

    public function productDetail($category, $slug)
    {
        $productDetail = $this->shopService->productDetails($slug);
        $relatedProducts = $this->shopService->relatedProducts($productDetail->category->name);
        // dd($relatedProducts);
        return view('client.product-details', compact('productDetail', 'relatedProducts'));
    }
}
