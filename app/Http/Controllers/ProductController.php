<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('products.index', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function getAllProducts()
    {
        $merchandise = Product::all();
        return view('merchandise', compact('merchandise'));
    }
    public function checkout($id)
    {
        $product = Product::findOrFail($id);

        $randomProduct = $this->getRandomProductsExcept($id);

        return view('merchandiseDetail', compact('product', 'randomProduct'));
    }

    public function getRandomProductsExcept($id)
    {
        $products = Product::where('id', '!=', $id)
            ->inRandomOrder()  
            ->take(3)          
            ->get();
        
        return $products;
    }
}