<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\CartService;
use App\Service\CheckoutSevice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    protected $checkoutService;
    protected $cartService;
    public function __construct()
    {
        $this->checkoutService = new CheckoutSevice();
        $this->cartService = new CartService();
    }

    public function checkout()
    {
        $total = $this->cartService->totalCart();
        return view('client.checkout', compact('total'));
    }

    public function postCheckout(Request $request)
    {
        DB::beginTransaction();

        $orderDetail = $this->checkoutService->OrderDetail($request->all());
        if ($orderDetail) {
            $order = $this->checkoutService->Order($orderDetail);
            if ($order) {
                DB::commit();
                return response()->json([
                    'status' => true,
                    'message' => 'Payment successful'
                ]);
            }
            DB::rollBack();
            return response()->json([
                'status' => false,
                'message' => 'Payment failed'
            ]);
        }

        DB::rollBack();
        return response()->json([
            'status' => false,
            'message' => 'Order detail creation failed'
        ]);
    }
}
