@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">CATALOGOS</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Editar Catalogo</h3>

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

                        <form action="/catalogo/{{$catalogo->idCatalogo}}" method="POST">
                            @csrf
                            @method('PUT')


                                <label for="" class="col-form-label col-md-12"></label>

                                <div class="row form-group">

                                <label for="" class="col-form-label col-md-4">Seccion del catalogo: </label>
                                <div class="col-md-4">
                                    <input id="categoriaCatalogo" name="categoriaCatalogo" type="text" class="form-control" tabindex="1" value="{{$catalogo->categoriasCatalogo}}" maxlength="20">
                                  </div>

                                  <div class="col-md-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="line">
                                            @error('categoriaCatalogo')
                                                    <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    @endif
                                </div>

                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>


                                <label for="" class="col-form-label col-md-4">Nombre del empleado: </label>
                                <div class="col-md-4">
                                    <select class="form-select form-select-lg md-4" name="idEmpleadoFK">
                                        @foreach ($empleados as $e)
                                            <option value="{{$e->idEmpleado}}">{{$e->nombreEmpleado}}</option>
                                        @endforeach
                                    </select>
                                  </div>

                                </div>

                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>



                              <a href="/catalogo" class="btn btn-secondary">Cancelar</a>
                              <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>

                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

