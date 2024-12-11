<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function displayHome()
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        return view('home');
    }
}
