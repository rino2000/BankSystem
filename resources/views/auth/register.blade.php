<h1>Register</h1>

<style>
    label {
        display: table-row;
        padding: 20px 20px 20px 20px;
    }

    form {
        display: table;
    }

    input {
        display: table-cell;
        margin-bottom: 60px;
    }

    .alert-alert-danger{
        margin-top: -60px;
        color: #ff0000;
    }

</style>

<form action="{{ @route('registerUser') }}" method="POST" style="padding:20px">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">
    @error('name')
        <div class="alert-alert-danger">{{ $message }}</div>
    @enderror

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}">
    @error('email')
        <div class="alert-alert-danger">{{ $message }}</div>
    @enderror

    <label for="ort">Ort:</label>
    <input type="text" name="ort" id="ort" value="{{ old('ort') }}">
    @error('ort')
        <div class="alert-alert-danger">{{ $message }}</div>
    @enderror

    <label for="plz">Plz:</label>
    <input type="text" name="plz" id="plz" value="{{ old('plz') }}">
    @error('plz')
        <div class="alert-alert-danger">{{ $message }}</div>
    @enderror

    <label for="telefonnummer">Telefonnummer:</label>
    <input type="text" name="telefonnummer" id="telefonnummer" value="{{ old('telefonnummer') }}">
    @error('telefonnummer')
        <div class="alert-alert-danger">{{ $message }}</div>
    @enderror

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" value="{{ old('password') }}">
    @error('password')
        <div class="alert-alert-danger">{{ $message }}</div>
    @enderror

    <label for="password_confirmation">Password Confirmation:</label>
    <input type="password" name="password_confirmation" id="password_confirmation"
        value="{{ old('password_confirmation') }}">
    @error('password_confirmation')
        <div class="alert-alert-danger">{{ $message }}</div>
    @enderror
    <br>

    <button type="submit">Register</button>
</form>
