@extends('layouts.plantillabase')



@section('contenido')
<div class="contenedors">
    <h1>Crear un cliente</h1>

    <br>

    <form action="/clientes" method="POST">
        @csrf


    <div class="row form-group">

        <label for="" class="col-form-label col-md-4"></label>
        <div class="col-md-8">
        </div>


        <label for="" class="col-form-label col-md-4">Nombre del cliente: <p style="color: red; display:inline">*</p></label>
            <div class="col-md-4">
                <input id="ancho" name="nombre" type="text" class="form-control" tabindex="2" value="{{old('nombre')}}">
            </div>

            <div class="col-md-4">
                @if ($errors->get('nombre'))
                    <div class="alert alert-danger" id="line">
                        @error('nombre')
                                <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                @endif
            </div>

        <label for="" class="col-form-label col-md-4"></label>
        <div class="col-md-8">
        </div>



        <label for="" class="col-form-label col-md-4">Telefono del cliente: <p style="color: red; display:inline">*</p> </label>
        <div class="col-md-4">
            <input id="ancho" name="telefono" type="number" class="form-control" tabindex="2" value="{{old('telefono')}}">
        </div>

        <div class="col-md-4">
            @if ($errors->get('telefono'))
                <div class="alert alert-danger" id="line">
                    @error('telefono')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            @endif
        </div>




        <label for="" class="col-form-label col-md-4"></label>
        <div class="col-md-8">
        </div>


        <label for="" class="col-form-label col-md-4">Documento del cliente: <p style="color: red; display:inline">*</p> </label>
        <div class="col-md-4">
            <input id="ancho" name="documento" type="number" class="form-control" tabindex="2" value="{{old('documento')}}">
        </div>

        <div class="col-md-4">
            @if ($errors->get('documento'))
                <div class="alert alert-danger" id="line">
                    @error('documento')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            @endif
        </div>

        <label for="" class="col-form-label col-md-4"></label>
        <div class="col-md-8">
        </div>


        <label for="" class="col-form-label col-md-4">Usuario del cliente: <p style="color: red; display:inline">*</p>  </label>
            <div class="col-md-4">

            <select name="usuarioFK" class="form-select form-select-lg md-4" id="cortos">
                @foreach ($usuario as $r)
                    <option value="{{$r->idUsuario}}">{{$r->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            @if ($errors->any())
                <div class="alert alert-danger" id="line">
                    @error('usuarioFK')
                            <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
            @endif
        </div>


        <label for="" class="col-form-label col-md-4"></label>
        <div class="col-md-8">
        </div>

      </div>
    <a href="/clientes" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
</div>

@endsection
