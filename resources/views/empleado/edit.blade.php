@extends('layouts.plantillabase')


@section('contenido')
<div class="contenedors">
<h2>Editar empleado</h2>

<br>

<form action="/empleado/{{$empleado->idEmpleado}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row form-group">


        <label for="" class="col-form-label col-md-4">Nombre del empleado:</label>
        <div class="col-md-4">
            <input id="nombreEmpleado" name="nombreEmpleado" type="text" class="form-control" value="{{$empleado->nombreEmpleado}}">
        </div>

        <div class="col-md-4">
            @if ($errors->any())
                <div class="alert alert-danger" id="line">
                    @error('nombre')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            @endif
        </div>

        <label for="" class="col-form-label col-md-12"></label>
        <label for="" class="col-form-label col-md-12"></label>

        <label for="" class="col-form-label col-md-4">Documento del empleado:</label>
        <div class="col-md-4">
            <input id="documentoEmpleado" name="documentoEmpleado" type="number" class="form-control" value="{{$empleado->documentoEmpleado}}">
        </div>

        <div class="col-md-4">
            @if ($errors->any())
                <div class="alert alert-danger" id="line">
                    @error('nombre')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            @endif
        </div>

        <label for="" class="col-form-label col-md-12"></label>
        <label for="" class="col-form-label col-md-12"></label>

        <label for="" class="col-form-label col-md-4">Fecha de nacimiento:</label>
        <div class="col-md-4">
            <input id="fechaNacimiento" name="fechaNacimiento" type="date" class="form-control" value="{{$empleado->fechaNacimiento}}">
        </div>

        <div class="col-md-4">
            @if ($errors->any())
                <div class="alert alert-danger" id="line">
                    @error('nombre')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            @endif
        </div>

        <label for="" class="col-form-label col-md-12"></label>
        <label for="" class="col-form-label col-md-12"></label>

        <label for="" class="col-form-label col-md-4">Telefono del empleado:</label>
        <div class="col-md-4">
            <input id="telefonoEmpleado" name="telefonoEmpleado" type="number" class="form-control" value="{{$empleado->telefonoEmpleado}}">
        </div>

        <div class="col-md-4">
            @if ($errors->any())
                <div class="alert alert-danger" id="line">
                    @error('nombre')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            @endif
        </div>

        <label for="" class="col-form-label col-md-12"></label>
        <label for="" class="col-form-label col-md-12"></label>

        <label for="" class="col-form-label col-md-4">Usuario del empleado:</label>
        <div class="col-md-4">
            <select class="form-select form-select-lg md-4" name="usuarioFK">
                @foreach ($usuario as $r)
                    <option value="{{$r->idUsuario}}">{{$r->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <label for="" class="col-form-label col-md-12"></label>


        <a href="/empleado" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>

</div>
@endsection
