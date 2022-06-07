@extends('welcome')


@section('content')
    <div class="container justify-content-center">
        <h1>Translation History</h1>

        @foreach ($transaktion as $t)
        <hr>
            <p>Menge: {{ $t->amount }} € </p>
            <p>Empfaenger IBAN: {{ $t->empfaenger }}</p>
        @endforeach
    </div>
@endsection
