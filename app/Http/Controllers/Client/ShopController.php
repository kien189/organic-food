<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view('client.shop');
    }

    public function flashSale(){
        return view('client.flash-sale');
    }
}
