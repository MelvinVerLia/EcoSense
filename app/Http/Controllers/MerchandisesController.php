<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MerchandisesController extends Controller
{
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