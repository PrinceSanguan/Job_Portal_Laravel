<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('link');
    }

    public function processRegistration(Request $request)
    {
        // Validate the form data (add more validation rules as needed)
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Save the user details to the database (you'll need to define your User model)
        // Example assuming you have a User model:
        // User::create($request->only(['username', 'password']));

        // Redirect or perform any other actions as needed
        return redirect()->route('success');
    }

    public function success()
    {
        return view('success');
    }
}