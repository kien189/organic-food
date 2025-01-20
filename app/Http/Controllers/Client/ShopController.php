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
        $brand = $this->shopService->CategoryShop();
        $products = $this->shopService->getProduct();
        return view('client.shop', compact('products', 'brand'));
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

    public function filler(Request $req)
    {
        dd($req->all());
        try {
            $success = $this->shopService->fillerCategory($req->query('category'));
            return response()->json([
                'status' => true,
                'message' => 'Products with keywords' . $req->category,
                'data' => $success
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'mesage' => 'An error occurred please try again later.'
            ]);
        }
    }
}
