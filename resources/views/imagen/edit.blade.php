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
                            <h3 class="text-center">Editar Empleado</h3>

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

                        <form action="{{ route('imagen.update', $imagen->idImagen) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            nombre de Imagen:
                            <br>
                            <input type="text" name="nombreImagen" class="form-control" value="{{ $imagen->nombreImagen }}">

                                @if ($errors->get('nombreImagen'))
                                    <div class="alert alert-danger">
                                        @error('nombreImagen')
                                                <small>*{{$message}}</small>
                                            <br>
                                        @enderror
                                    </div>
                                @endif

                            <br>

                            Seleccione la imagen:*
                            <br>
                            <input type="file" name="imageProducto" id="">
                            @if ($errors->get('imageProducto'))
                                <div class="alert alert-danger">
                                    @error('imageProducto')
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>
                            @endif
                            <br><br>

                            <a href="/imagen" class="btn btn-secondary" tabindex="5">Cancelar</a>
                            <input type="submit" value="Editar" class="btn btn-success">
                            </form>

                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

