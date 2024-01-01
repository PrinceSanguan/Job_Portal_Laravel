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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/joblisting', function () {
    return view('joblisting');
});

Route::get('/job_one', function () {
    return view('job_one');
});

Route::get('/job_two', function () {
    return view('job_two');
});

Route::get('/job_three', function () {
    return view('job_three');
});

Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'processRegistration']);
Route::get('/success', [RegistrationController::class, 'success'])->name('success');