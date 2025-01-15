<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::query()->get();
        return view('client.index',compact('categories'));
    }

    public function admin(){
        return view('server.index');
    }


}
