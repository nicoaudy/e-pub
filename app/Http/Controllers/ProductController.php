<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

use App\Http\Requests;
use Intervention\Image\Facades\Image;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{

    public function getDashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.products',['products' => $products]);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/admin/products');
    }

    public function newProduct()
    {
        $categories = Category::all();
        return view('admin.new', compact('categories'));
    }

    public function add()
    {

        $file               = Request::file('file');
        $extension          = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));

        $images             = Request::file('image');
        $realPath           = $images->getRealPath();
        $image_extension    = $images->getClientOriginalExtension();
        $image_name         = uniqid(). $images->getClientOriginalName();
        $path               = 'img/products/';
        if(!File::exists($path)){
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        Image::make($realPath)->resize(800, 800)->save($path . $image_name);

        $entry                          = new \App\File();
        $entry->mime                    = $file->getClientMimeType();
        $entry->original_filename       = $file->getClientOriginalName();
        $entry->filename                = $file->getFilename().'.'.$extension;

        $entry->image_name              = $image_name;
        $entry->image_path              = $path;
        $entry->image_mime              = $image_extension;
        $entry->image_original_filename = $image_name;
        $entry->save();

        $product                = new Product();
        $product->file_id       = $entry->id;
        $product->name          = Request::input('name');
        $product->description   = Request::input('description');
        $product->price         = Request::input('price');
        $product->imageurl      = Request::input('imageurl');
        $product->image_id      = $entry->id;
        $product->category_id   = Request::input('category');
        $product->save();

        return redirect('/admin/products');

    }
}
