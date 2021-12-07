@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Registro de Usuarios</h3>
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

                        <form action="/producto" method="POST">
                            @csrf

                            <div class="row form-group">

                                <label for="" class="col-form-label col-md-4">Nombre producto</label>
                                <div class="col-md-4">
                                    <input id="nombreProducto" name="nombreProducto" type="text" class="form-control" tabindex="1">
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


                                <label for="" class="col-form-label col-md-4">Descripcion producto</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" class="form-group" id="descripcionProducto" name="descripcionProducto" ></textarea>
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


                                <label for="" class="col-form-label col-md-4">costo Producto</label>
                                <div class="col-md-4">
                                    <input id="costoProducto" name="costoProducto" type="text" class="form-control" tabindex="3">
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


                                <label for="" class="col-form-label col-md-4">Nombre del material: </label>
                                <div class="col-md-4">

                                <select class="form-select form-select-lg md-4" name="idMaterialFK">
                                    @foreach ($materiales as $m)
                                        <option value="{{$m->idMaterial}}">{{$m->nombreMaterial}}</option>
                                    @endforeach
                                </select>
                                </div>
                                <label for="" class="col-form-label col-md-4"></label>

                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>

                                <label for="" class="col-form-label col-md-4">Tipo de producto: </label>
                                <div class="col-md-4">

                                    <select class="form-select form-select-lg md-4" name="idTipoProductoFK">
                                        @foreach ($tipoProductos as $t)
                                            <option value="{{$t->idTipoProducto}}">{{$t->tipoProducto}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="" class="col-form-label col-md-4"></label>
                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>

                                <label for="" class="col-form-label col-md-4">Color de producto: </label>
                                <div class="col-md-4">

                                    <select class="form-select form-select-lg md-4" name="ColorProducto">
                                        @foreach ($colorProductos as $p)
                                            <option value="{{$p->idColorProducto}}">{{$p->colorProducto}}</option>
                                        @endforeach
                                    </select>

                          </div>
                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>

                                <label for="" class="col-form-label col-md-4">Imagen: </label>
                                <div class="col-md-4">

                                    <select class="form-select form-select-lg md-4" name="idImagenFK">
                                        @foreach ($imagen as $i)
                                            <option value="{{$i->idImagen}}">{{$i->nombreImagen}}</option>

                                        @endforeach
                                    </select>
                                </div>

                                <label for="" class="col-form-label col-md-4"></label>
                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>

                                <label for="" class="col-form-label col-md-4">Catalogo: </label>
                                <div class="col-md-4">

                                    <select class="form-select form-select-lg md-4" name="idCatalogoFK">
                                        @foreach ($catalogo as $b)
                                            <option value="{{$b->idCatalogo}}">{{$b->categoriaCatalogo}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="" class="col-form-label col-md-4"></label>
                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>



                            </div>
                          <a href="/producto" class="btn btn-secondary" tabindex="5">Cancelar</a>
                          <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

                          <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
