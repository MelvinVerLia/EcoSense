<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Session;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        $merchandise = Product::all();
        return view('merchandise', compact('merchandise'));
    }
    public function checkout($id)
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
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