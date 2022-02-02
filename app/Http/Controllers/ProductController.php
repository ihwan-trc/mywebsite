<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('shop.index', [
            "title" => "Shop",
            "products" => Product::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('shop.product', [
            "title" => "single product",
            "product" => $product
        ]);
    }
}
