@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">MATERIAL</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Crear Material</h3>

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

                        <form action="/material" method="POST">
                            @csrf

                            <div class="row form-group">

                                <label for="" class="col-form-label col-md-4">Nombre del material: <p style="color: red; display:inline">*</p> </label>
                                <div class="col-md-4">
                                    <input id="nombreMaterial" name="nombreMaterial" type="text" class="form-control" tabindex="1">
                                </div>

                                <div class="col-md-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="line">
                                            @error('nombreMaterial')
                                                    <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    @endif
                                </div>

                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>

                                <label for="" class="col-form-label col-md-4">Descripcion del material: <p style="color: red; display:inline">*</p> </label>
                                <div class="col-md-4">
                                    <input id="descripcionMaterial" name="descripcionMaterial" type="text" class="form-control" tabindex="2">
                                </div>

                                <div class="col-md-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="line">
                                            @error('descripcionMaterial')
                                                    <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    @endif
                                </div>

                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>

                                <label for="" class="col-form-label col-md-4">Costo del material: <p style="color: red; display:inline">*</p> </label>
                                <div class="col-md-4">
                                    <input id="costoMaterial" name="costoMaterial" type="number" class="form-control" tabindex="3">
                                </div>

                                <div class="col-md-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="line">
                                            @error('costoMaterial')
                                                    <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    @endif
                                </div>

                            </div>

                            <a href="/material" class="btn btn-secondary" tabindex="5">Cancelar</a>
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

