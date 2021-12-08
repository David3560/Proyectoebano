@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">REGISTRAR COLOR</h3>
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


                        <form action="/colorProducto" method="POST">
                            <div class="row form-group">
                                @csrf

                                <label for="" class="col-form-label col-md-4"></label>
                                <div class="col-md-8"></div>

                                <label for="" class="col-form-label col-md-4">Nombre del color</label>
                                <div class="col-md-8">
                                    <input id="ancho" name="nombreColor" type="text" class="form-control" tabindex="1">

                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="alert">
                                            @error('nombreColor')
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

                          <a href="/colorProducto" class="btn btn-secondary" tabindex="5">Cancelar</a>
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
