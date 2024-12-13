<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request, int $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $customerID = session('customer');

        $product = Product::findOrFail($id);

        if ($product->stock_quantity < $request->quantity) {
            return redirect()->back()->with('error', 'Not enough stock available');
        }

        $total_price = $product->price * $request->quantity;

        $transaction = new TransactionHeader();
        $transaction->customer_id = $customerID->id;  
        $transaction->product_id = $product->id;
        $transaction->price = $product->price;
        $transaction->quantity = $request->quantity;
        $transaction->total_price = $total_price;
        $transaction->save();

        $product->stock_quantity -= $request->quantity;
        $product->save();

        return redirect()->back()->with('success', 'Successfully bought the product');
    }
}
