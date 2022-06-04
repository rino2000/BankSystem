<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaktionController extends Controller
{
    // Form display
    public function form()
    {
        return view('transaktion');
    }

    public function send(Request $request)
    {
        //Get user from request
        //check if Empfaenger email is valide
        //check if amount von guthaben reicht
        //send money
    }
}