<<<<<<< HEAD
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    @component('title')
    {{-- <title>Home</title> --}}
  </head>
  <body>
    @include('navbar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
    @component('context')
   
    @auth
    <h1>User is authenticated</h1>
  @else
  <p>Nicht authentication</p>
@endauth
    
  </body>
</html>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @section('content')
    @endsection
    @if (Auth::check())
        <h1>User is authenticated</h1>
    @else
        <h1>User is not authenticated</h1>
    @endif
    @foreach ($users as $user)
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Telefonnummer</th>
                <th>Ort</th>
                <th>Plz</th>
            </tr>
            <tr>
                <td>{{ $user->name }} </td>
                <td>{{ $user->email }} </td>
                <td>{{ $user->telefonnummer }} </td>
                <td>{{ $user->ort }} </td>
                <td>{{ $user->plz }} </td>
            </tr>
        </table>
    @endforeach
</body>

</html>
>>>>>>> 29361b1fe6a52350e83e6262cd28dc01688bf174
