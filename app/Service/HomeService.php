<?php

namespace App\Service;

use App\Models\Product;

class HomeService
{
    public function getProduct()
    {
        return Product::query()
            ->with('category', 'images')
            ->inRandomOrder()
            ->limit(10)->get();
    }

    public function getNewProduct()
    {
        return Product::query()->with('category', 'images')
            ->where('created_at', '>', now()
                ->subDays(7))->limit(10)->get();
    }


    public function getDiscountedProducts($discountPercentage = 45)
    {
        return Product::whereNotNull('sale_price') // Chỉ lấy sản phẩm có giá khuyến mãi
            ->with('category', 'images')
            ->whereRaw('((price - sale_price) / price) * 100 >= ?', [$discountPercentage]) // Tính phần trăm giảm giá
            ->get();
    }

    
}
