<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobUser;
use App\Models\JobDetails;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
    // if ($request->hasFile('file') && $request->file('file')->isValid()) {

    $post = new JobUser();
    $path = $request->file('file')->store('/',['disk' => 'my_diskpdf']); 

    // Save the user details to the database using the JobUser model
    $data = ([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'coverletter' => $request->input('coverletter'),
        'resume' => $path, // Save file path in the database
        'created_at' => now(),
    ]);

    $post->insert($data);

    // Redirect to the success page after successful registration
    return redirect()->route('success')->with('success', 'Registration successful!');
}

     
 // Show the PDF
    public function showPdf($filename)
    {
        // Get the PDF file path from the database or wherever it is stored
        $pdfPath = 'uploads-pdf/' . $filename; // Adjust this based on your storage structure

        // Use the custom disk to retrieve the file
        $file = Storage::disk('my_diskpdf')->get($pdfPath);

        if ($file) {
            // Specify the content type as application/pdf
            $response = response($file, 200)->header('Content-Type', 'application/pdf');

            // Optionally, you can force the file to be downloaded instead of displayed in the browser
            // $response->header('Content-Disposition', 'attachment; filename="'.$filename.'"');

            return $response;
        } else {
            return response()->json(['error' => 'File not found'], 404);
        }
    }

    public function processRegistration(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = User::create($data);

        return redirect()->route('admin');
    }

    public function showRegistrationForm()
    {
        // Display the registration form
        return view('admin.register');
    }

    public function showSuccess()
    {
        // Display the success view
        return view('success');
    }

    public function deleteApplicant($id)
    {
        // Find the user by ID
        $applicant = JobUser::find($id);
    
        if (!$applicant) {
            return redirect()->route('admin')->with('error', 'Applicant not found.');
        }
    
        // Get the resume file path from the database
        $resumePath = $applicant->resume;
    
        // Delete the user
        $applicant->delete();
    
        if ($resumePath) {
            // Delete the resume file from the public/uploads-pdf directory
            Storage::disk('my_diskpdf')->delete($resumePath);
        }
    
        // Redirect back to the admin page
        return redirect()->route('admin')->with('success', 'Applicant deleted successfully!');
    }

    public function showUserDetails()
    {
        // Fetch all users from the database
        $users = JobUser::all();

        // Pass the retrieved information to the 'admin' view
        return view('admin.admin', ['users' => $users]);
    }

    public function showLoginForm()
    {
    // Check if the user is already authenticated
    if (auth()->check()) {
        // Redirect the authenticated user to a different page
        return redirect('admin/admin');
    }

    // Display the login form for non-authenticated users
    return view('login');
}

    // Handle login form submission
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

          // Authentication
          if (Auth::attempt($data)) {
            $user = Auth::user();
            
            // Redirect to the admin page on successful login
            return redirect()->route('admin');
        } 
    
        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

     // Display the admin page
     public function adminPage()
     {
         return view('admin.admin');
     }

    ///////////////////////// Jobposting Logic //////////////////////////////

    // Run this code so that have link public in the storage php artisan storage:link

    public function jobPosting(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required',
        'address' => 'required',
        'published' => 'required',
        'salary' => 'required',
        'vacancy' => 'required',
        'status' => 'required',
        'description' => 'required',
        'responsibilities' => 'required',
        'qualification' => 'required',
        'detail' => 'required',
        'file' => 'required|image'
    ]);

    // Handle file upload

    // Create a new instance of the JobDetails model
    $post = new JobDetails();

    $path = $request->file('file')->store('/',['disk' => 'my_disk']); 


    // Save the user details to the database using the JobDetails model
    $data = [
        'name' => $request->input('name'),
        'address' => $request->input('address'),
        'published' => $request->input('published'),
        'salary' => $request->input('salary'),
        'vacancy' => $request->input('vacancy'),
        'status' => $request->input('status'),
        'description' => $request->input('description'),
        'responsibilities' => $request->input('responsibilities'),
        'qualification' => $request->input('qualification'),
        'detail' => $request->input('detail'),
        'image' => $path,
    ];
    

    // Save the model to the database
    $post->insert($data);

    // Redirect back to the same page with success message
    return back()->with('success', 'Job posting successful.'); 
}

  ///////////////////////// Jobposting Logic //////////////////////////////

    public function showJobListing()
    {
        // Fetch all jobs from the database
        $users = JobDetails::all();

        // Pass the jobs to the 'job_listing' view
        return view('joblisting', ['users' => $users]);
    }

    public function showDetails()
    {
        // Fetch all jobs from the database
        $users = JobDetails::all();

        // Pass the jobs to the 'job_listing' view
        return view('admin.job_details', ['users' => $users]);
    }

    public function showJobOne($id)
    {
        // Fetch the job details based on the provided ID
        $users = JobDetails::find($id);

        // Pass the job details to the 'job_one' view
        return view('job_one', ['users' => $users]);
    }

    public function deleteJob($id)
    {
        // Find the job by ID
        $job = JobDetails::find($id);
    
        if (!$job) {
            return redirect()->route('job_details')->with('error', 'Job not found.');
        }
    
        // Get the image file path from the database
        $imagePath = $job->image;
    
        // Delete the job
        $job->delete();
    
        if ($imagePath) {
            // Delete the image file from public/uploads-image
            Storage::disk('my_disk')->delete($imagePath);
        }
    
        // Redirect back to the Job Details page
        return redirect()->route('job_details')->with('success', 'Job deleted successfully!');
    }
    

    /////////////////This Code Is For Logout////////////////////////////////////////
    public function logout() {

        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
    /////////////////This Code Is For Logout////////////////////////////////////////

}





