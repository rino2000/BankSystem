<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\TransaktionController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/send', [TransaktionController::class ,'show']);
Route::post('/send/transaktion', [TransaktionController::class ,'send']);
Route::get('/history/transaktion', [TransaktionController::class ,'history']);

Route::get('/bankkonto', [BankController::class, 'show'])->name('bankkonto');
Route::get('/info/bankkonto', [BankController::class, 'info'])->name('bankkontoinfo');
Route::post('/create/bankkonto', [BankController::class, 'create'])->name('createBankkonto');
