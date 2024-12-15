<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function displayHome()
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        $products = $this->getRandomProducts();
        return view('home', compact('products'));
    }

    public function getRandomProducts()
    {
        $products = Product::inRandomOrder()
            ->take(3)
            ->get();

        return $products;
    }

    public function storeComplaints(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email', 
            'complaints' => 'required|string|max:500', 
        ]);

        try {
            Contact::create([
                'email' => $validated['email'],
                'complaints' => $validated['complaints'],
            ]);

            return redirect()->back()->with('contact_success', 'Complaint submitted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['contact_err' => 'Failed to submit complaint. Please try again later.']);
        }
    }
}
