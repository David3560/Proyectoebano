@extends('layouts.plantillabase')

@section('contenido')

    <div class="contenedors">
        <h1>Editar rol</h1>

        <form action="/rolusus/{{$rolusu->idRolusu}}" method="POST">
        @method('PUT')
        @csrf


        <input id="codigo" name="codigo" type="hidden" class="form-control" value="{{$rolusu->idRolusu}}">


        <div class="col-md-8">
            <label id="espace" class="form-label">Nombre: </label>
            <input id="ancho" name="nombre" type="text" class="form-control" value="{{$rolusu->nombreRol}}">
        </div>

        <br>

        <div class="col-md-4">
            @if ($errors->any())
                <div class="alert alert-danger" id="alert">
                    @error('nombre')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            @endif
        </div>
        <br>

    <a href="/rolusus" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
