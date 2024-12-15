<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Session;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        $customerID = Session::get('customer');
        $customer = Customer::find($customerID);

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customerID,
            'old_password' => 'required|min:8',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ], [
            'new_password.confirmed' => 'The new password and the confirmation password must match.',
        ]);


        if (!$customer) {
            return redirect()->back()->with('error', 'User not found.');
        }

        if (!Hash::check($request->old_password, $customer->password)) {
            return redirect()->back()->withErrors(['password' => 'The old password is incorrect.']);
        }

        $customer->first_name = $validatedData['first_name'];
        $customer->last_name = $validatedData['last_name'];
        $customer->email = $validatedData['email'];
        $customer->password = bcrypt($validatedData['password']);

        $customer->save();

        session(['customer' => $customer->id]);

        return redirect()->route('home')->with('success', 'Profile updated successfully!');

    }

    public function goToProfile()
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        $customerID = Session::get('customer');
        $customer = Customer::find($customerID);
        return view('profile', compact('customer'));
    }

    public function goToUpdateProfile()
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        $customerID = Session::get('customer');
        $customer = Customer::find($customerID);
        return view('profileUpdate', compact('customer'));
    }
}
