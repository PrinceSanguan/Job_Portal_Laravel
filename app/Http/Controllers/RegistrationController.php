<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobUser;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    public function applyJob(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'coverletter' => 'required',
        ]);

        // Save the user details to the database using the JobUser model
        JobUser::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'coverletter' => $request->input('coverletter'),
            'created_at' => now(),
        ]);

        // Redirect to the registration form
        return redirect()->route('register.form');
    }

    public function processRegistration(Request $request)
    {
        // Redirect to the success page after successful registration
        return redirect()->route('success')->with('success', 'Registration successful!');
    }

    public function showRegistrationForm()
    {
        // Display the registration form
        return view('register');
    }

    public function showSuccess()
    {
        // Display the success view
        return view('success');
    }

    public function deleteApplicant($id)
    {
        // Find the user by ID and delete
        JobUser::find($id)->delete();

        // Redirect back to the admin page
        return redirect()->route('admin')->with('success', 'Applicant deleted successfully!');
    }

    public function showUserDetails()
    {
        // Fetch all users from the database
        $users = JobUser::all();

        // Pass the retrieved information to the 'admin' view
        return view('admin', ['users' => $users]);
    }

    public function showLoginForm()
    {
        // Display the login form
        return view('login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
    
        // Check if the provided credentials are correct
        if (($credentials['username'] == 'admin' && $credentials['password'] == '123') || 
            ($credentials['username'] == 'admin2' && $credentials['password'] == '123')) {
    
            // Redirect to the admin page on successful login
            return redirect()->route('admin');
        }
    
        // Redirect back to the login page with an error message
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

     // Display the admin page
     public function adminPage()
     {
         return view('admin');
     }
}


