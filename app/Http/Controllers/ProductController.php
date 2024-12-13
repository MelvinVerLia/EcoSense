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
        // Fetch the main product details
        $product = Product::findOrFail($id);

        // Get 3 random products excluding the given ID
        $randomProduct = $this->getRandomProductsExcept($id);

        // Return the view with both product and random products
        return view('merchandiseDetail', compact('product', 'randomProduct'));
    }

    public function getRandomProductsExcept($id)
    {
        // Fetch 3 random products excluding the current product ID
        $products = Product::where('id', '!=', $id)
            ->inRandomOrder()  // Randomize the order
            ->take(3)          // Take 3 items
            ->get();
        
        // Return the fetched products
        return $products;
    }
}