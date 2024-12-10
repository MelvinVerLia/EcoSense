<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Show the contact form
    public function showForm()
    {
        return view('contact');
    }

    // Handle the form submission
    public function submitForm(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'problem' => 'required|string',
        ]);

        // Send the email (you can customize the recipient and content)
        Mail::send([], [], function ($message) use ($request) {
            $message->to('your-email@example.com') // Your email address
                    ->subject('Contact Us Form Submission')
                    ->setBody(
                        'Name: ' . $request->name . 
                        '<br>Email: ' . $request->email .
                        '<br>Problem: ' . nl2br($request->problem),
                        'text/html'
                    );
        });

        // Redirect with success message
        return redirect()->route('contact.form')->with('success', 'Your message has been sent!');
    }
}