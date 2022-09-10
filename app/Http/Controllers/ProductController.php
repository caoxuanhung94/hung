<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::get();
        // dd($products);
        return view('product.index',['products'=>$products]);
    } 
}
