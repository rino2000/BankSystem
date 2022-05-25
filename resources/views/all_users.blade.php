
@component('base')

@foreach ($users as $user)
    <h1 style="color:red">This is user {{ $user->id }}</h1>
    <h2 style="color:blue">This is user {{ $user->name }}</h2>
    <h3 style="color:green">This is user {{ $user->email }}</h3>
    <h3 style="color:green">This is user {{ $user->telefonnummer }}</h3>
    <h3 style="color:green">This is user {{ $user->plz }}</h3>
    <h3 style="color:green">This is user {{ $user->ort }}</h3>
    <p style="color:sandybrown">This is user {{ $user->password }}</p>
@endforeach