<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Session;

class TransactionController extends Controller
{
    public function store(Request $request, int $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $customerID = Session::get('customer');
        $customer = Customer::find($customerID);

        $product = Product::findOrFail($id);

        if ($product->stock_quantity < $request->quantity) {
            return redirect()->back()->with('error', 'Not enough stock available');
        }

        $total_price = $product->price * $request->quantity;

        $transaction = new TransactionHeader();
        $transaction->customer_id = $customer->id;  
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
