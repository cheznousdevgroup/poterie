<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('index', compact('products','categories'));
    }
    public function grid()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('shop-grid', compact('products','categories'));
    }
}
