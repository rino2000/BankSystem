<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Transaktion;
use App\Models\Bankkonto;

class TransaktionController extends Controller
{
    public function show()
    {
        return view('transaktion');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'iban' => 'required',
            'amount' => 'required|max:20|min:0.01',
        ]);

        //Add amount to bankkonto (guthaben)
        Bankkonto::where('iban', $validated['iban'])->increment('guthaben', $validated['amount']);

        $transaktion = new Transaktion();
        $transaktion->konto_id = Auth::id();
        $transaktion->amount = $validated['amount'];
        $transaktion->empfaenger = $validated['iban'];

        $transaktion->save();

        return redirect('/');
    }

    public function history()
    {
        return view('history_transaktion', ['transaktion' => Transaktion::where('konto_id', Auth::id())->get()]);
    }
}
