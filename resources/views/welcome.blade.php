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
