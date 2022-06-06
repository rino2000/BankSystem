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
    <h1>Add Bankkonto</h1>
    <form action="/create/bankkonto" method="POST" style="padding:10px">
        @csrf

        <div class="form-group">
            <label for="name">Bankname</label>
            <input type="text" class="form-control" name="bank" id="bank" value="{{ old('bank') }}">
            @error('bank')
                <div class="alert-alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <label for="email">Iban</label>
        <input type="text" class="form-control" name="iban" id="iban" value="{{ old('iban') }}">
        @error('iban')
            <div class="alert-alert-danger">{{ $message }}</div>
        @enderror

        <label for="ort">Bic</label>
        <input type="text" class="form-control" name="bic" id="bic" value="{{ old('bic') }}">
        @error('bic')
            <div class="alert-alert-danger">{{ $message }}</div>
        @enderror

        <label for="kontonummer">Kontonummer</label>
        <input type="text" class="form-control" name="kontonummer" id="kontonummer" value="{{ old('kontonummer') }}">
        @error('kontonummer')
            <div class="alert-alert-danger">{{ $message }}</div>
        @enderror

        <label>Kartennummer</label>
        <input type="text" class="form-control" name="kartennummer" id="kartennummer"
            value="{{ old('kartennummer') }}">
        @error('kartennummer')
            <div class="alert-alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <button type="submit" class="btn btn-primary">Add Bankkonto</button>
    </form>

</div>
