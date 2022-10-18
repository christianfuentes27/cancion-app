@extends('app.base')

@section('content')
<div>
     <table class="table table-striped" id="bikeTable">
            <thead>
                <tr>
                    <td>
                        id
                    </td>
                    <td>
                        {{ $persona->id }}
                    </td>
                </tr>
                <tr>
                    <td>
                        dni
                    </td>
                    <td>
                        {{ $persona->dni }}
                    </td>
                </tr>
                <tr>
                    <td>
                        nombre
                    </td>
                    <td>
                        {{ $persona->nombre }}
                    </td>
                </tr>
                <tr>
                    <td>
                        apellidos
                    </td>
                    <td>
                        {{ $persona->apellidos }}
                    </td>
                </tr>
                <tr>
                    <td>
                        telefono
                    </td>
                    <td>
                        {{ $persona->telefono }}
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
            </tbody>
    </table>
    <br>
    <a href="{{ url('persona') }}" class="btn btn-primary">back</a>
    &nbsp;
    <a href="{{ url('persona/' . $persona->id . '/edit') }}" class="btn btn-primary">edit persona</a>
    &nbsp;
    <button form="deleteForm" type="submit" class="btn btn-primary">delete persona</button>
</div>
<form action="{{ url('persona/' . $persona->id) }}" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection