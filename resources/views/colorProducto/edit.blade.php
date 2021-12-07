@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">

        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Editar color</h3>

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

                        <form action="/colorProducto/{{$colorProducto->idColorProducto}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="col-md-8">
                                <label id="espace" class="form-label">Nombre: </label>
                                <input id="ancho" name="nombreColor" type="text" class="form-control" value="{{$colorProducto->colorProducto}}">
                            </div>

                            <br>

                            <div class="col-md-4">
                                @if ($errors->any())
                                    <div class="alert alert-danger" id="alert">
                                        @error('nombreColor')
                                                <small>*{{$message}}</small>
                                            <br>
                                        @enderror
                                    </div>
                                @endif
                            </div>

                      <a href="/colorProducto" class="btn btn-secondary">Cancelar</a>
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

