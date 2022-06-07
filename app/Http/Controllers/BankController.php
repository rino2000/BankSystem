<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bankkonto;
use Illuminate\Support\Facades\Auth;

class BankController extends Controller
{
    public function show()
    {
        return view('bankkonto');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'bank' => 'required|max:80',
            'iban' => 'required|max:50',
            'bic' => 'required|max:15',
            'kontonummer' => 'required|max:15',
            'kartennummer' => 'required|max:20',
        ]);

        $user_id = Auth::user()->id;

        $bankkonto = new Bankkonto();
        $bankkonto->user_id = $user_id;
        $bankkonto->bank = $validated['bank'];
        $bankkonto->iban = $validated['iban'];
        $bankkonto->gueltigkeit = date_create('2025-12-30 23:59:59');
        $bankkonto->bic = $validated['bic'];
        $bankkonto->kontonummer = $validated['kontonummer'];
        $bankkonto->kartennummer = $validated['kartennummer'];

        $bankkonto->save();

        return redirect('/');
    }

    public function info()
    {
        return view('konto_info', ['konto' => Bankkonto::where('user_id', Auth::id())->get()]);
    }
}
