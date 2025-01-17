<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Service\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $productService;

     public function __construct(ProductService $productService)
     {
         $this->productService = $productService;
     }

    public function index()
    {
        $products = $this->productService->getProducts();

        return view('server.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->get();
        return view('server.product.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request) {
        // dd($request->all());

        try {
            DB::beginTransaction();
            $data = $request->validated();
            $images = $data['photos'];
            unset($data['photos']);

            // dd($images);
            $product = $this->productService->createProduct($data);
            $this->productService->createProductImages( $images, $product);
            DB::commit();
            return redirect()->route('product.index')->with('success', 'Thêm sản phẩm thành công');
        } catch (\Throwable $e) {
            dd($e->getMessage());
        }
    }


    /**
     * Store ProductImage.
     */


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::query()->get();
        $product = $this->productService->getProduct($product->id);
        return view('server.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        try{
            DB::beginTransaction();
            $data = $request->validated();
            $images = $data['photos'] ?? [];
            unset($data['photos']);
            // dd( $images);

            $product = $this->productService->updateProduct($product->id, $data);
            if(!empty($images )){
                $this->productService->createProductImages( $images, $product);
            }
            DB::commit();
            return redirect()->route('product.index')->with('success', 'Cập nhật sản phẩm thành công');
        }catch(\Throwable $e){
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try{
            $this->productService->deleteProduct($product->id);
            return redirect()->route('product.index')->with('success', 'Xóa sản phẩm thành công');
        }catch(\Throwable $e){
            dd($e->getMessage());
        }
    }
}
