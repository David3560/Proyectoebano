@extends('layouts.plantillabase')

@section('contenido')

    <div class="contenedors">
        <h1>Crear rol</h1>

        <form action="/rolusus" method="POST">
            <div class="row form-group">
            @csrf

            <label for="" class="col-form-label col-md-4"></label>
            <div class="col-md-8"></div>

            <label for="" class="col-form-label col-md-4">Nombre Rol</label>
            <div class="col-md-8">
            <input id="ancho" name="nombre" type="text" class="form-control" tabindex="2" >

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

            <label for="" class="col-form-label col-md-4"></label>
            <div class="col-md-8">
            </div>
    </div>
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
