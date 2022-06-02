<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/users', function () {
    return view('all_users' , ['users' => User::all()]);
});

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/register', [UserController::class, 'registerForm'])->name('registerForm');

//Log in user
Route::post('/user/login',[UserController::class, 'userLogin']);

Route::get('/login', [UserController::class, 'login']);

<<<<<<< HEAD


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
=======
>>>>>>> 2c977abe20bcbec7d9c6043926bfeb8945809de1
