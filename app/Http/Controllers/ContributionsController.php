<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use Illuminate\Http\Request;
use Session;

class ContributionsController extends Controller
{
    public function index()
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        $contribute = Contribution::all();
        return view('contribute', compact('contribute'));
    }

    public function goToDetail($id)
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        $contribute = Contribution::findOrFail($id);

        return view('contributeDetail', compact('contribute'));
    }

    public function donate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'donationAmount' => 'required|numeric|min:1', 
        ]);
        $contribute = Contribution::findOrFail($id);  

        $contribute->total_raised += $request->donationAmount; 
        $contribute->current_progress = $contribute->total_raised / $contribute->goal * 100;

        $contribute->save();

        return redirect()->back()->with('success', 'Your donation has been successfully recorded!');
    }
}
