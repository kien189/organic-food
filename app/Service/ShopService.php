<?php

namespace App\Service;

use App\Models\Category;
use App\Models\Product;

class ShopService
{
    public function productDetails($slug)
    {
        return Product::query()
            ->where(['slug' => $slug])
            ->first();
    }
    public function relatedProducts($category)
    {
        return Product::query()
            ->whereHas('category', function ($q) use ($category) {
                $q->where('name', $category);
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

    public function CategoryShop()
    {
        return Category::query()
            ->withCount('products') // Đếm số lượng sản phẩm trong mỗi category
            ->get();
    }


    public function fillerCategory(array $data)
    {
        $cagegory = Category::query()
            ->where('slug', $data['category'])
            ->get;
        return Product::query()
            ->where('category_id', $cagegory->id)
            ->with('category')
            ->limit(10)
            ->get();
    }
}
