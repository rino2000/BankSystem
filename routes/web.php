<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
})->name('index');


//Register form
Route::get('/register', [RegisterController::class, 'registerForm'])->name('verification.notice');

// Route::get('/register', [RegisterController::class, 'registerForm'])->name('registerForm');

//Log in user
Route::post('/user/login',[UserController::class, 'userLogin']);

// Route::get('/login', [UserController::class, 'login']);

//Register user
Route::post('/register', [RegisterController::class, 'register'])->name('registerUser');

//Send email to registered user
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// //Login form
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');


//Logout user
Route::get('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
});