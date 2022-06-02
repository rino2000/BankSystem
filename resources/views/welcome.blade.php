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
</body>

</html>
