@include('welcome')

@component('title')
<title>Registration</title>

@component('context')


<div class="container justify-content-center">
    <h1>Registration</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" value="{{ old('name') }}" aria-describedby="emailHelp">
            @error('name')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="{{ old('email') }}" aria-describedby="emailHelp">
            @error('email')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PLZ</label>
            <input type="text" class="form-control" id="plz" value="{{ old('plz') }}" aria-describedby="emailHelp">
            @error('plz')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ort</label>
            <input type="text" class="form-control" id="ort" value="{{ old('ort') }}" aria-describedby="emailHelp">
            @error('ort')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telefonnummer</label>
            <input type="text" class="form-control" id="telefonnummer" value="{{ old('telefonnummer') }}"
                aria-describedby="emailHelp">
            @error('telefonnummer')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" value="{{ old('password') }}"
                aria-describedby="emailHelp">
            @error('password')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Wiederhole Password</label>
            <input type="password" class="form-control" value="{{ old('password1') }}" id="password1">
            @error('password1')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" id="agbs" for="exampleCheck1">Nutzungsbedingungen und
                Datenschutzerklärung</label>
            @error('agbs')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Registrieren</button>
    </form>
</div>