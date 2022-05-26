<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;

class UserController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:80',
            'email' => 'required|email',
            'plz' => 'required|max:5',
            'ort' => 'required',
            'telefonnummer' => 'required',
            'password' => 'required|confirmed',
        ]);

        $email = $request->get('email');
        Mail::to($email)->send(new RegisterMail($request));

        $user = $this->create($request);

        return redirect("/email/verify");
    }

    public function create($data)
    {
        $user = new CustomUser;
        $user->name = $data->name;
        $user->email = $data->email;
        $user->plz = $data->plz;
        $user->ort = $data->ort;
        $user->telefonnummer = $data->telefonnummer;
        $user->password = Hash::make($data->password);
        return $user->save();
    }
}
