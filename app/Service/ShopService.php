<?php

namespace App\Service;

use App\Models\Product;

class ShopService
{
    public function productDetails($slug){
        return Product::query()
        ->where(['slug'=> $slug])
        ->first();
    }
    public function relatedProducts($category){
        return Product::query()
        ->whereHas('category' , function($q) use ($category){
            $q->where('name',$category);
        })->with('category')
        ->inRandomOrder()
        ->get();
    }
    public function getProduct()
    {
        return Product::query()
            ->with('category')
            ->inRandomOrder()
            ->limit(12)->get();
    }
}
