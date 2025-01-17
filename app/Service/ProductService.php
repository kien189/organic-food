<?php

namespace App\Service;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Traits\UploadImageTrait;

class ProductService
{
    use UploadImageTrait;
    public function getProducts()
    {
        return Product::query()->with('category')
            ->withCasts(['created_at' => 'datetime'])
            ->paginate(5)
            ->appends(['search' => 'search']);
    }


    public function createProduct(array $data)
    {
        $data['image'] = $this->uploadImage($data['image']);
        $product = Product::create($data);
        return $product;
    }


    public function createProductImages(array $data, $product)
    {
        if (is_array($data) && count($data) > 0) {
            $images = array_map(fn($data) => [
                'product_id' => $product->id,
                'image' => $this->uploadImage($data),
            ], $data);

            $product->images()->createMany($images);
            return true;
        }
        return false;
    }

    public function getProduct($id)
    {
        return Product::query()->with('category','images')
            ->withCasts(['created_at' => 'datetime'])
            ->findOrFail($id);
    }

    public function updateProduct($id, array $data)
    {
        if(!empty($data['image'])) {
            $data['image'] = $this->uploadImage($data['image']);
        }
        $product = Product::query()->findOrFail($id);
        $product->update($data);
        return $product;
    }

    public function deleteProduct($id)
    {

        $product = Product::query()->findOrFail($id);
        $product->delete();
        return true;
    }

}
