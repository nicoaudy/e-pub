<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);
        return view('main.index',['products' => $products]);

    }
}