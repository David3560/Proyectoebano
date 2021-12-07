@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Usuario</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                        <form action="/producto/{{$productos->idProducto}}" method="POST">
                            @csrf
                            @method('PUT')

                                <div class="row form-group">
                                    <label for="" class="col-form-label col-md-4">Nombre del producto:</label>
                                    <div class="col-md-4">
                                        <input id="nombreProducto" name="nombreProducto" type="text" class="form-control" tabindex="1" value="{{$productos->nombreProducto}}">
                                    </div>

                                    <div class="col-md-4">
                                        @if ($errors->get('nombreProducto'))
                                            <div class="alert alert-danger" id="line">
                                                @error('nombreProducto')
                                                        <small>*{{$message}}</small>
                                                    <br>
                                                @enderror
                                            </div>
                                        @endif
                                    </div>

                                    <label for="" class="col-form-label col-md-12"></label>
                                    <label for="" class="col-form-label col-md-12"></label>

                                    <label for="" class="col-form-label col-md-4">Descripcion del producto:</label>
                                    <div class="col-md-4">
                                        <input id="descripcionProducto" name="descripcionProducto" type="text" class="form-control" tabindex="2" value="{{$productos->descripcionProducto}}">
                                    </div>

                                    <div class="col-md-4">
                                        @if ($errors->get('descripcionProducto'))
                                            <div class="alert alert-danger" id="line">
                                                @error('descripcionProducto')
                                                        <small>*{{$message}}</small>
                                                    <br>
                                                @enderror
                                            </div>
                                        @endif
                                    </div>

                                    <label for="" class="col-form-label col-md-12"></label>
                                    <label for="" class="col-form-label col-md-12"></label>

                                    <label for="" class="col-form-label col-md-4">Costo del producto:</label>
                                    <div class="col-md-4">
                                        <input id="costoProducto" name="costoProducto" type="text" class="form-control" tabindex="3" value="{{$productos->costoProducto}}">
                                    </div>

                                    <div class="col-md-4">
                                        @if ($errors->get('costoProducto'))
                                            <div class="alert alert-danger" id="line">
                                                @error('costoProducto')
                                                        <small>*{{$message}}</small>
                                                    <br>
                                                @enderror
                                            </div>
                                        @endif
                                    </div>

                                    <label for="" class="col-form-label col-md-12"></label>
                                    <label for="" class="col-form-label col-md-12"></label>

                                    <label for="" class="col-form-label col-md-4">Nombre del material:</label>
                                    <div class="col-md-4">

                                    <select class="form-select form-select-lg md-4" name="idMaterialFK">
                                        @foreach ($materiales as $m)
                                            <option value="{{$m->idMaterial}}">{{$m->nombreMaterial}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col-md-4"></div>

                                    <label for="" class="col-form-label col-md-12"></label>
                                    <label for="" class="col-form-label col-md-12"></label>

                                    <label for="" class="col-form-label col-md-4">Tipo de producto:</label>
                                    <div class="col-md-4">

                                    <select class="form-select form-select-lg md-4" name="idTipoProductoFK">
                                        @foreach ($tipoProductos as $t)
                                            <option value="{{$t->idTipoProducto}}">{{$t->tipoProducto}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col-md-4"></div>

                                    <label for="" class="col-form-label col-md-12"></label>
                                    <label for="" class="col-form-label col-md-12"></label>

                                    <label for="" class="col-form-label col-md-4">Color de producto:</label>
                                    <div class="col-md-4">

                                    <select class="form-select form-select-lg md-4" name="idColorProductoFK">
                                        @foreach ($colorProductos as $c)
                                            <option value="{{$c->idColorProducto}}">{{$c->colorProducto}}</option>
                                        @endforeach
                                    </select>
                                    </div>

                                    <label for="" class="col-form-label col-md-12"></label>
                                    <label for="" class="col-form-label col-md-12"></label>

                                </div>

                            <a href="/producto" class="btn btn-secondary" tabindex="5">Cancelar</a>
                            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
