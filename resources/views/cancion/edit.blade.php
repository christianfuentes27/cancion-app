@extends('app.base')

@section('content')
<div>
    <form action="{{ url('cancion/' . $cancion->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input value="{{ old('titulo', $cancion->titulo) }}" required type="text" minlength="2" maxlength="80" class="form-control" id="titulo" name="titulo" placeholder="titulo">
            <label for="interprete">Interprete</label>
            <input value="{{ old('interprete', $cancion->interprete) }}" required type="text" minlength="3" maxlength="100" class="form-control" id="interprete" name="interprete" placeholder="interprete">
            <label for="autor">Autor</label>
            <input value="{{ old('autor', $cancion->autor) }}" type="text" minlength="6" maxlength="100" class="form-control" id="autor" name="autor" placeholder="autor">
            <label for="duracion">Duracion</label>
            <input value="{{ old('duracion', $cancion->duracion) }}" type="time" class="form-control" id="duracion" name="duracion" placeholder="duracion">
            <label for="genero">Genero</label>
            <input value="{{ old('genero', $cancion->genero) }}" required type="text" minlength="1" maxlength="20" class="form-control" id="genero" name="genero" placeholder="genero">
            <label for="album">Album</label>
            <input value="{{ old('album', $cancion->album) }}" type="text" minlength="1" maxlength="70" class="form-control" id="album" name="album" placeholder="album">
            <label for="orden">Orden</label>
            <input value="{{ old('orden', $cancion->orden) }}" type="number" class="form-control" id="orden" name="orden" placeholder="orden">
            <label for="fechapublicacion">Fecha publicacion</label>
            <input value="{{ old('fechapublicacion', $cancion->fechapublicacion) }}" type="date" class="form-control" id="fechapublicacion" name="fechapublicacion" placeholder="fechapublicacion">
            @error('titulo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('interprete')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('autor')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('duracion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('genero')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('album')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('orden')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('fechapublicacion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">edit cancion</button>
        &nbsp;
        <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
        &nbsp;
        <a href="{{ url('cancion/' . $cancion->id) }}" class="btn btn-primary">view cancion</a>
        &nbsp;
        <button type="submit" form="deleteForm" class="btn btn-primary">delete cancion</button>
    </form>
    &nbsp;
    <form action="{{ url('cancion/' . $cancion->id) }}" method="post" id="deleteForm">
        @csrf
        @method('delete')
    </form>
</div>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection