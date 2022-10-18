@extends('app.base')

@section('content')
<div>
    <form action="{{ url('persona') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="dni">DNI</label>
            <input value="{{ old('dni') }}" required type="text" minlength="9" maxlength="10" class="form-control" id="dni" name="dni" placeholder="DNI">
            <label for="nombre">Nombre</label>
            <input value="{{ old('nombre') }}" required type="text" minlength="3" maxlength="30" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            <label for="apellidos">Apellidos</label>
            <input value="{{ old('apellidos') }}" required type="text" minlength="6" maxlength="60" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
            <label for="telefono">Telefono</label>
            <input value="{{ old('telefono') }}" type="number" minlength="9" maxlength="15" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
            @error('dni')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('apellidos')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('telefono')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">add</button>
        &nbsp;
        <a href="{{ url('persona') }}" class="btn btn-primary">back</a>
    </form>
</div>
@endsection