@extends('layouts.plantillabase')



@section('contenido')
<div class="contenedors">
<h2>Editar cliente</h2>

<br>

<form action="/clientes/{{$cliente->idCliente}}" method="POST">
    @method('PUT')
    @csrf


    <div class="row form-group">


        <div class="col-md-12">
            <input id="idCliente" name="idCliente" type="hidden" class="form-control" value="{{$cliente->idCliente}}">
        </div>

        <label for="" class="col-form-label col-md-4">Nombre del cliente:</label>
        <div class="col-md-4">
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$cliente->nombreCliente}}">
        </div>


            @if ($errors->get('nombre'))
            <div class="col-md-4">
                <div class="alert alert-danger" id="line">
                    @error('nombre')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            </div>
            @endif


        <label for="" class="col-form-label col-md-12"></label>
        <label for="" class="col-form-label col-md-12"></label>

        <label for="" class="col-form-label col-md-4">Telefono del cliente:</label>
        <div class="col-md-4">
            <input id="telefono" name="telefono" type="nunber" class="form-control" value="{{$cliente->telefonoCliente}}">
        </div>


            @if ($errors->get('telefono'))
            <div class="col-md-4">
                <div class="alert alert-danger" id="line">
                    @error('telefono')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            </div>
            @endif





        <label for="" class="col-form-label col-md-12"></label>
        <label for="" class="col-form-label col-md-12"></label>

        <label for="" class="col-form-label col-md-4">Documento del cliente: </label>
        <div class="col-md-4">
            <input id="documento" name="documento" type="number" class="form-control" value="{{$cliente->documentoCliente}}">
        </div>


            @if ($errors->get('documento'))
            <div class="col-md-4">
                <div class="alert alert-danger" id="line">
                    @error('documento')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            </div>
            @endif


        <label for="" class="col-form-label col-md-12"></label>
        <label for="" class="col-form-label col-md-12"></label>

        <label for="" class="col-form-label col-md-4">Usuario del cliente: </label>
            <div class="col-md-4">
            <select name="usuarioFK" class="form-select form-select-lg md-4">
                @foreach ($usuario as $r)
                    <option value="{{$r->idUsuario}}">{{$r->name}}</option>
                @endforeach
            </select>
        </div>

        <label for="" class="col-form-label col-md-12"></label>
        <label for="" class="col-form-label col-md-12"></label>

      </div>
    <a href="/clientes" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>

    </form>
</div>
@endsection
