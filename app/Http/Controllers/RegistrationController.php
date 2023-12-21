<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobUser;

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

        // Save the user details to the database using the JobUser model
        JobUser::create([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        // Redirect or perform any other actions as needed
        return redirect()->route('success');
    }

    public function success()
    {
        return view('success');
    }
}