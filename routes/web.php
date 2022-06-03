<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
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

//Log in user
Route::post('/user/login',[UserController::class, 'userLogin']);

Route::get('/login', [UserController::class, 'login']);

//Logout user
Route::get('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
});
