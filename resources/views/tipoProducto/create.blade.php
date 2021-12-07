@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Tipo producto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Crear tipo producto</h3>

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

                        <form action="/tipoProducto" method="POST">
                            <div class="row form-group">
                            @csrf

                            <label for="" class="col-form-label col-md-12"></label>

                            <label for="" class="col-form-label col-md-4">Tipo de producto</label>
                            <div class="col-md-8">

                                <input id="ancho" name="tipoDeProducto" type="text" class="form-control" tabindex="1">

                            </div>


                                </div>


                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>

                          <a href="/tipoProducto" class="btn btn-secondary" tabindex="5">Cancelar</a>
                          <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                        </form>


                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

