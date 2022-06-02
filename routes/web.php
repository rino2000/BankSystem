<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/', function () {
<<<<<<< HEAD
    return view('welcome');
=======
    return view('welcome', ['users' => User::all()]);
>>>>>>> 29361b1fe6a52350e83e6262cd28dc01688bf174
})->name('index');


//Register form
Route::get('/register', [RegisterController::class, 'registerForm'])->name('verification.notice');

<<<<<<< HEAD
Route::get('/register', [UserController::class, 'registerForm'])->name('registerForm');

//Log in user
Route::post('/user/login',[UserController::class, 'userLogin']);

Route::get('/login', [UserController::class, 'login']);

<<<<<<< HEAD


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
=======
//Register user
Route::post('/register', [RegisterController::class, 'register'])->name('registerUser');
>>>>>>> 29361b1fe6a52350e83e6262cd28dc01688bf174

//Send email to registered user
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->name('verification.verify');

<<<<<<< HEAD
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
=======
>>>>>>> 2c977abe20bcbec7d9c6043926bfeb8945809de1
=======
//Login form
Route::get('/login', function () {
    return view('auth.login');
})->name('login');



//Logout user
Route::get('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
});
>>>>>>> 29361b1fe6a52350e83e6262cd28dc01688bf174
