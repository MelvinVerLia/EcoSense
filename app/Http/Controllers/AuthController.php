<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function goToLogin()
    {
        return view('login');
    }

    public function redirect()
    {
        return redirect('/login');
    }

    public function goToRegister()
    {
        return view('register');
    }

    public function login(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();

        if ($customer && Hash::check($request->password, $customer->password)) {
            Session::put('customer', $customer->id);
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);

        Customer::create($data);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function logout()
    {
        Session::forget('customer');
        return redirect()->route('login');
    }

    public function deleteAccount()
    {        
        $customerID = Session::get('customer');
        
        if ($customerID) {
            $customer = Customer::find($customerID);

            if ($customer) {
                $customer->delete();

                Session::forget('customer');

                return redirect()->route('login')->with('success', 'Your account has been deleted successfully.');
            }

            return back()->withErrors(['error' => 'User not found in the database.']);
        }

        return back()->withErrors(['error' => 'No user is logged in.']);
    }

}
