<?php

namespace App\Service;

use App\Models\Order;
use App\Models\OrderDetail;

class CheckoutSevice
{
    protected $cartService ;

    public function __construct()
    {
        $this->cartService = new CartService();
    }
    public function OrderDetail(array $data){
        $data['user_id'] = auth()->id();
        return OrderDetail::create($data);
    }

    public function Order($orderDetail){
        $getCart = $this->cartService->getCartByUser();
        foreach ($getCart as $key => $value) {
            $data = [
                'order_detail_id' => $orderDetail->id,
                'user_id' => auth()->id(),
                'product_id' => $value->product_id,
                'quantity' => $value->quantity,
                'price' => $value->product->sale_price ?? $value->product->price
            ];
             Order::create($data);
            $this->cartService->getCart($value->id)->delete();
        }
        return true;
    }


}
