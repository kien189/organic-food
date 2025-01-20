<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartService;

    public function __construct()
    {
        $this->cartService = new CartService();
    }

    public function cart()
    {
        $total = $this->cartService->totalCart();
        // dd($total);
        return view('client.cart',compact('total'));
    }

    public function addToCart(Request $request)
    {

        // dd($request->all());
        try {
            $this->cartService->addToCart($request->all());
            return response()->json(['success' => true, 'message' => 'Add product to cart successfully']);
        } catch (\Throwable $e) {
            dd($e)->getMessage();
            return response()->json(['error' => true, 'message' => 'An error has occurred. Please try again . ']);

        }
    }

    public function updateCart(Request $request)
    {
        try {
            $this->cartService->updateCart($request->all());
            return response()->json(['success' => true, 'message' => 'Update cart successfully']);
        } catch (\Throwable $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', 'An error has occurred. Please try again . ');
        }
    }

    public function destroyCart($id)
    {
        try {
            $this->cartService->getCart($id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'Delete cart successfully'
            ]);
        } catch (\Throwable $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', 'An error has occurred. Please try again . ');
        }
    }



}
