<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bankkonto;
use Illuminate\Support\Facades\Auth;

class BankController extends Controller
{
    private $buchstaben = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private $zahlen = '0123456789';
    private $bic_len = 8;
    private $pruefziffer_len = 2;
    private $kontonummer_len = 10;
    private $kartenNr_len = 7;
    private $bankleitzahl_len = 8;

    //Create bankkonto after registered user
    public function create(Request $request)
    {
    }

    //get bankkonto info and display it
    public function info(Request $request)
    {
    }

    public function generateKonto()
    {
        $bankkonto = new Bankkonto();

        $bankkonto->user_id = Auth::id();
        $bankkonto->bank = "Test Bank";
        $bankkonto->iban = $this->generateIBAN();
        $bankkonto->gueltigkeit = "20.02.2025";
        $bankkonto->bic = $this->bic();
        $bankkonto->kontonummer = $this->kontoNr();
        $bankkonto->kartenNr = $this->kartenNr();
        $bankkonto->guthaben = "0.00";

        $bankkonto->save();
    }

    function generateIBAN()
    {
        //https://www.check24.de/files/p/2013/7/3/f/3545-iban-merkzettel.gif
        $laenderkennzeichen = "DE";

        $pruefziffer = generate($this->zahlen, $this->pruefziffer_len);
        $bankleitzahl = generate($this->zahlen, $this->bankleitzahl_len);
        $kontonummer = generate($this->zahlen, $this->kontonummer_len);

        $iban = $laenderkennzeichen . $pruefziffer . $bankleitzahl . $kontonummer;

        function generate($str, $len)
        {
            return substr(str_shuffle($str), 0, $len);
        }
        return $iban;
    }

    function generate($str, $len)
    {
        return substr(str_shuffle($str), 0, $len);
    }

    public function bic()
    {
        return generate($this->buchstaben, $this->bic_len);
    }

    public function kontoNr()
    {
        return generate($this->zahlen, $this->kontonummer_len);
    }

    public function kartenNr()
    {
        return generate($this->zahlen, $this->kartenNr_len);
    }

    public function bankleitzahl()
    {
        return generate($this->zahlen, $this->bankleitzahl_len);
    }
}
