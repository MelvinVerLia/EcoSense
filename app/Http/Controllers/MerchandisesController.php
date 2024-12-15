<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class MerchandisesController extends Controller
{
    public function checkout($id)
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        $product = Product::findOrFail($id);

        return view('merchandiseDetail.checkout', compact('merchandise'));
    }

    public function getAllMerchandise()
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        $merchandise = Product::all(); 
        return view('merchandise', compact('merchandise'));
    }


}