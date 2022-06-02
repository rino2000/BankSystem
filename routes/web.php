<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

