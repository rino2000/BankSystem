<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
<<<<<<< HEAD
use App\Models\User;
=======
use App\Http\Controllers\TransaktionController;
use Illuminate\Support\Facades\Auth;
>>>>>>> 04d5e62a169b98824209f1506849fb07035d1fa5

Route::get('/', function () {
    return view('welcome');
})->name('index');

//Register form
Route::get('/register', [RegisterController::class, 'registerForm'])->name('verification.notice');

//Register user
Route::post('/register', [RegisterController::class, 'register'])->name('registerUser');

//Verifvy user email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->name('verification.verify');

//Log in user
Route::post('/user/login', [UserController::class, 'userLogin']);

//Show login form
Route::get('/login', [UserController::class, 'login']);

//Logout user
Route::get('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
});

Route::get('/user/info', function (Request $request) {
    return view('user_info');
})->name('userInfo');

<<<<<<< HEAD
Route::get('/register', [UserController::class, 'registerForm'])->name('registerForm');

//Log in user
Route::post('/user/login',[UserController::class, 'userLogin']);

Route::get('/login', [UserController::class, 'login']);

=======
//Transaktion form
Route::get('/send', [TransaktionController::class, 'form']);
Route::post('/send/transaktion', [TransaktionController::class, 'send']);
>>>>>>> 04d5e62a169b98824209f1506849fb07035d1fa5
