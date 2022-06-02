<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/', function () {
    return view('welcome', ['users' => User::all()]);
})->name('index');


//Register form
Route::get('/register', [RegisterController::class, 'registerForm'])->name('verification.notice');

//Register user
Route::post('/register', [RegisterController::class, 'register'])->name('registerUser');

//Send email to registered user
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->name('verification.verify');

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
