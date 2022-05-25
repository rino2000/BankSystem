<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;


Route::get('/', function () {
    return view('base');
})->name('index');

Route::get('/users', function () {
    return view('all_users' , ['users' => User::all()]);
});

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/register', [UserController::class, 'registerForm'])->name('registerForm');

Route::get('/login', [UserController::class, 'login']);
