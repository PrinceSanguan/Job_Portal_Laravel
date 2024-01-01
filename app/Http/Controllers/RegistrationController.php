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
            'name' => 'required',
            'email' => 'required',
            'coverletter' => 'required'
        ]);

        // Save the user details to the database using the JobUser model
        JobUser::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'coverletter' => $request->input('coverletter')
        ]);

        // Redirect or perform any other actions as needed
        return redirect()->route('success');
    }

    public function success()
    {
        return view('success');
    }
}