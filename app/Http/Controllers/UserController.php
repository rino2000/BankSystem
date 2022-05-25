<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $form_data = $request->validate([
            'name' => 'required|max:80',
            'email' => 'required|email|unique:user|max:255',
            'plz' => 'required|max:255',
            'ort' => 'required|max:255',
            'telefonnummer' => 'required|max:255',
            'password' => 'min:8|confirmed',
            'password1' => 'min:8',
            'agbs' => 'required|boolean',
        ]);

        User::create($form_data);

        return redirect('/users');
    }


    public function login()
    {
        return view('auth.login');
    }
}
