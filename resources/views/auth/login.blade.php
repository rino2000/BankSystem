<form action="/" method="post">
    {{-- @csrf --}}
    {{ csrf_field() }}

    <label for="email">Email:</label>
    <input type="text" name="email" id="">

    <label for="password">Password:</label>
    <input type="password" id="password">

    <button type="submit">Login</button>
</form>