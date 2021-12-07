@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Material</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Editar Material</h3>

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

                        <form action="/material/{{$material->idMaterial}}" method="POST">
                            @csrf
                            @method('PUT')
                          <div class="mb-3">
                            <label for="" class="form-label">nombre Material</label>
                            <input id="nombreMaterial" name="nombreMaterial" type="text" class="form-control" value="{{$material->nombreMaterial}}">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">descripcion Material</label>
                            <input id="descripcionMaterial" name="descripcionMaterial" type="text" class="form-control" value="{{$material->descripcionMaterial}}">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">costo Material</label>
                            <input id="costoMaterial" name="costoMaterial" type="text" class="form-control" value="{{$material->costoMaterial}}">
                          </div>

                          <a href="/material" class="btn btn-secondary">Cancelar</a>
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

