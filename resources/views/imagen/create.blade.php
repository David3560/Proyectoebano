@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">EMPLEADO</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Crear Empleado</h3>

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

                        <form action="{{ route('imagen.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="row form-group">
                            @csrf

                            <label for="" class="col-form-label col-md-12"></label>


                            <label for="" class="col-form-label col-md-4">Nombre de la imagen</label>
                            <div class="col-md-8">
                                <input id="ancho" type="text" name="nombreImagen" class="form-control">
                            </div>

                            @if ($errors->get('nombreImagen'))
                                <div class="alert alert-danger">
                                    @error('nombreImagen')
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>
                            @endif
                            <br>

                            <label for="" class="col-form-label col-md-12"></label>


                            <label for="" class="col-form-label col-md-4">Nombre de la imagen</label>
                            <div class="col-md-5">
                                <input type="file" name="imageProducto" class="form-control">
                            </div>
                            @if ($errors->get('imageProducto'))
                                <div class="alert alert-danger">
                                    @error('imageProducto')
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>
                            @endif
                            <br><br>

                            <label for="" class="col-form-label col-md-12"></label>


                            </div>

                            <input type="submit" value="Guardar" class="btn btn-success">
                            <a href="/imagen" class="btn btn-secondary" tabindex="5">Cancelar</a>
                            </form>


                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

