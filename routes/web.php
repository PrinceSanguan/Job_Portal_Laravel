<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Default routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/joblisting', [RegistrationController::class, 'showJobListing'])->name('joblisting');
Route::get('/job_one/{id}', [RegistrationController::class, 'showJobOne'])->name('job_one');

Route::get('/job_two', function () {
    return view('job_two');
});

Route::get('/job_three', function () {
    return view('job_three');
});

Route::get('/post_a_job', function () {
    return view('post_a_job');
});

// Define a route for the login page
Route::get('/login', [RegistrationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RegistrationController::class, 'login']);

// Registration routes

// web.php
Route::post('/apply-job', [RegistrationController::class, 'applyJob'])->name('apply.job');
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'processRegistration'])->name('register.submit');
Route::get('/success', [RegistrationController::class, 'showSuccess'])->name('success');

// Add a new route for deleting applicants
Route::delete('/admin/delete/{id}', [RegistrationController::class, 'deleteApplicant'])->name('admin.delete');

// web.php
Route::get('/admin', [RegistrationController::class, 'adminPage'])->name('admin.page');
Route::get('/admin', [RegistrationController::class, 'showUserDetails'])->name('admin');

// Show pdf 
Route::get('/show-pdf/{filename}', [RegistrationController::class, 'showPdf'])->name('show-pdf');

//JobPosting
Route::post('/post_a_job', [RegistrationController::class, 'jobPosting'])->name('post_a_job');

Route::get('/job_details', [RegistrationController::class, 'showDetails'])->name('job_details');

// Add a new route for deleting applicants
Route::delete('/job_details/delete/{id}', [RegistrationController::class, 'deleteJob'])->name('job.delete');
