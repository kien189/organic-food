<?php

namespace App\Service;

use App\Models\Cart;

class CartService
{
    public function getCartByUser()
    {
        return Cart::query()
            ->with('product')
            ->where('user_id', auth()->id())
            ->get();
    }

    public function addToCart(array $data)
    {
        $cart = $this->checkCartByUser($data['product_id']);
        if (isset($cart)) {
            $data['quantity'] = $data['quantity'] ?? 1;
            return $cart->increment('quantity', $data['quantity']);
        }
        $data['quantity'] = $data['quantity'] ?? 1;
        $data['user_id'] = auth()->id();
        return Cart::create($data);
    }

    public function checkCartByUser($product_id)
    {
        $cart = Cart::query()
            ->where('product_id', $product_id)
            ->where('user_id', auth()->id())
            ->first();
        return $cart;
    }

    public function getCart($id)
    {
        $cart = Cart::query()
            ->where('id', $id)
            ->where('user_id', auth()->id())
            ->first();
        return $cart;
    }
    public function updateCart(array $data)
    {
        if (!empty($data['quantity']) && $data['quantity'] > 0) {
            foreach ($data['quantity'] as $key => $value) {
                $cart = $this->getCart( $key);
                if (isset($cart)) {
                    $cart->update(['quantity' => $value]);
                }
            }
            return true;
        }
        return false;
    }
    public function totalCart(){
        $sum = 0 ;
        $cart = $this->getCartByUser();
        foreach ($cart as $key => $value) {
            $sum += $value->product->price * $value->quantity;
        }
        return $sum;
    }


}
