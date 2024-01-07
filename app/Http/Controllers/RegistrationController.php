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
        'file' => 'required|mimes:pdf', // Validate resume file (PDF only)
    ]);

    // Handle file upload
    if ($request->hasFile('file') && $request->file('file')->isValid()) {

        $post = new JobUser();
        $path = $request->file('file')->store('/', ['disk' => 'my_disk']); // Store in the 'public' disk under 'resumes'

        // Save the user details to the database using the JobUser model
        $data = ([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'coverletter' => $request->input('coverletter'),
            'resume' => $path, // Save file path in the database
            'created_at' => now(),
        ]);

        $post->insert($data);

        // Redirect to the registration form
        return redirect()->route('register.form');
    }

    // If file upload fails, redirect back with an error message
    return redirect()->back()->with('error', 'Invalid or missing resume file.');
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
     
     // Show the PDF
     public function showPdf($filename)
    {
        $pdfPath = public_path('uploads/' . $filename);

        return response()->file($pdfPath);
    }

    ///////////////////////// Jobposting Logic //////////////////////////////

    public function jobPosting(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required',
        'address' => 'required',
        'published' => 'required',
        'vacancy' => 'required',
        'status' => 'required',
        'description' => 'required',
        'responsibilities' => 'required',
        'qualification' => 'required',
        'details' => 'required',
        'file' => 'required|mimes:pdf', // Validate resume file (PDF only)
    ]);

    // Handle file upload
    if ($request->hasFile('file') && $request->file('file')->isValid()) {

        $post = new JobUser();
        $path = $request->file('file')->store('/', ['disk' => 'my_disk']); // Store in the 'public' disk under 'resumes'

        // Save the user details to the database using the JobUser model
        $data = ([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'coverletter' => $request->input('coverletter'),
            'resume' => $path, // Save file path in the database
            'created_at' => now(),
        ]);

        $post->insert($data);

        // Redirect to the registration form
        return redirect()->route('register.form');
    }

    // If file upload fails, redirect back with an error message
    return redirect()->back()->with('error', 'Invalid or missing resume file.');
}
}


