<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\Request;

class MainController extends Controller
{
    public function index()
    {
        $products   = Product::paginate(6);
        return view('main.index', compact('products'));
    }

    public function postSearch(Request $request)
    {
        $keyword = Request::get('search');

        if($keyword)
        {
            $products = Product::where('name', 'like', '%' . $keyword . '%')->paginate(6);
            return view('main.index', compact('products'));
        }
    }

    public function getDetail($id)
    {
        $product = Product::find($id);
        return view('main.detail', compact('product'));
    }
}