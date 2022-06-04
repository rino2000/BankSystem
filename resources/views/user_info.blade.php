@extends('welcome')

@section('content')
@if (Auth::check())
    <div class="d-flex justify-content-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefonnummer</th>
                    <th scope="col">Ort</th>
                    <th scope="col">Plz</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ Auth::user()->name }}</td>
                    <td>{{ Auth::user()->email }}</td>
                    <td>{{ Auth::user()->telefonnummer }}</td>
                    <td>{{ Auth::user()->ort }}</td>
                    <td>{{ Auth::user()->plz }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endif
@endsection