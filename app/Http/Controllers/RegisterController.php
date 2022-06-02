<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    // Display Register Form
    public function registerForm()
    {
        return view('auth.register');
    }

    // Create User
    public function register(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:80',
            'email' => 'required|unique:users|max:255',
            'ort' => 'required|max:50',
            'plz' => 'required|max:6',
            'telefonnummer' => 'required|max:16',
            'password' => 'required|confirmed|min:8|max:60',
        ]);

        $user = new User();

        //fill user data into $user
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->ort = $validated['ort'];
        $user->plz = $validated['plz'];
        $user->telefonnummer = $validated['telefonnummer'];

        //Hash password field
        $user->password = Hash::make($validated['password']);

        //create user
        $user->save();

        //User authenticate
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
        }

        //Send verification email to user
        event(new Registered($user));

        return view('auth.register-email-send');
    }
}
