@include('welcome')

    <label for="email">Email:</label>
    <input type="text" name="email" id="">

@component('context')
<div class="container justify-content-center">
    <h1>Login</h1>
    <form action="/user/login" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name='email'value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name='password' value="{{ old('password') }}"class="form-control"  id="exampleInputPassword1">
            @error('password')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
