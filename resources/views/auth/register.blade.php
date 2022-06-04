@include('welcome')

<style>
    label {
        display: table-row;
        padding: 10px 10px 10px 10px;
    }

    form {
        display: table;
    }

    input {
        display: table-cell;
        margin-bottom: 20px;
    }

    .alert-alert-danger {
        margin-top: -20px;
        color: #ff0000;
    }

</style>

<div class="container justify-content-center">
    <h1>Register</h1>
    <form action="{{ @route('registerUser') }}" method="POST" style="padding:10px">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <div class="alert-alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <div class="alert-alert-danger">{{ $message }}</div>
        @enderror

        <label for="ort">Ort:</label>
        <input type="text" class="form-control" name="ort" id="ort" value="{{ old('ort') }}">
        @error('ort')
            <div class="alert-alert-danger">{{ $message }}</div>
        @enderror

        <label for="plz">Plz:</label>
        <input type="text" class="form-control" name="plz" id="plz" value="{{ old('plz') }}">
        @error('plz')
            <div class="alert-alert-danger">{{ $message }}</div>
        @enderror

        <label for="telefonnummer">Telefonnummer:</label>
        <input type="text" class="form-control" name="telefonnummer" id="telefonnummer"
            value="{{ old('telefonnummer') }}">
        @error('telefonnummer')
            <div class="alert-alert-danger">{{ $message }}</div>
        @enderror

        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
        @error('password')
            <div class="alert-alert-danger">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Password Confirmation:</label>
        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
            value="{{ old('password_confirmation') }}">
        @error('password_confirmation')
            <div class="alert-alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

</div>
