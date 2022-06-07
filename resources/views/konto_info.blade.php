@extends('welcome')


@section('content')
    <div class="container justify-content-center">
        <h1>Alle deine Konten:</h1>
        @foreach ($konto as $k)
            <hr>
            <p>Bankname: {{ $k->bank }}</p>
            <p>Gueltigkeit: {{ $k->gueltigkeit }}</p>
            <p>BIC: {{ $k->bic }}</p>
            <p>KontoNr: {{ $k->kontonummer }}</p>
            <p>KartenNr: {{ $k->kartennummer }}</p>
            <p>Guthaben: {{ $k->guthaben }} €</p>
        @endforeach
    </div>
@endsection
