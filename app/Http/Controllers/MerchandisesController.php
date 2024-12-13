<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MerchandisesController extends Controller
{
    // Display a listing of the merchandise.
    public function index()
    {
        $merchandises = Product::all();  // Fetch all merchandise from the database
        return view('admin.merchandises.index', compact('merchandises'));
    }

    // Show the form for creating a new merchandise.
    public function create()
    {
        return view('admin.merchandises.create');
    }

    // Store a newly created merchandise in storage.
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'image' => 'required|image',  // Make sure the image is an image file
        ]);

        $merchandise = new Product();
        $merchandise->name = $request->name;
        $merchandise->description = $request->description;
        $merchandise->price = $request->price;
        $merchandise->stock_quantity = $request->stock_quantity;

        // Store the image if it's uploaded
        if ($request->hasFile('image')) {
            $merchandise->image = $request->file('image')->store('merchandises', 'public');
        }

        $merchandise->save();  // Save to the database

        return redirect()->route('merchandises.index');  // Redirect to the index page
    }

    // Show the form for editing the specified merchandise.
    public function edit(Product $merchandise)
    {
        return view('admin.merchandises.edit', compact('merchandise'));
    }

    // Update the specified merchandise in storage.
    public function update(Request $request, Product $merchandise)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'image' => 'nullable|image',  // Image is optional during update
        ]);

        $merchandise->name = $request->name;
        $merchandise->description = $request->description;
        $merchandise->price = $request->price;
        $merchandise->stock_quantity = $request->stock_quantity;

        // Store the new image if uploaded
        if ($request->hasFile('image')) {
            $merchandise->image = $request->file('image')->store('merchandises', 'public');
        }

        $merchandise->save();  // Save updated data

        return redirect()->route('merchandises.index');  // Redirect to the index page
    }

    // Remove the specified merchandise from storage.
    public function destroy(Product $merchandise)
    {
        $merchandise->delete();  // Delete the merchandise

        return redirect()->route('merchandises.index');  // Redirect to the index page
    }

    public function checkout($id)
    {
        $product = Product::findOrFail($id);

        return view('merchandiseDetail.checkout', compact('merchandise'));
    }

    public function goToDetail($id)
    {
        return view('merchandiseDetail');
    }

    public function getAllMerchandise()
    {
        $merchandise = Product::all(); 
        return view('merchandise', compact('merchandise'));
    }


}