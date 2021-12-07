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

                        <form action="/empleado" method="POST">
                            @csrf



                                <label for="" class="col-form-label col-md-4">Nombre del empleado: <p style="color: red; display:inline">*</p> </label>
                                <div class="col-md-4">
                                    <input id="nombreEmpleado" name="nombreEmpleado" type="text" class="form-control"  value="{{old('nombreEmpleado')}}" tabindex="1" >
                                </div>

                                <div class="col-md-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="line">
                                            @error('nombreEmpleado')
                                                    <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    @endif
                                </div>

                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>

                                <label for="" class="col-form-label col-md-4">Documento del empleado: <p style="color: red; display:inline">*</p> </label>
                                <div class="col-md-4">
                                    <input id="documentoEmpleado" name="documentoEmpleado" type="number" class="form-control" tabindex="2" value="{{old('documentoEmpleado')}}">
                                </div>

                                <div class="col-md-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="line">
                                            @error('documentoEmpleado')
                                                    <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    @endif
                                </div>

                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>


                                <label for="" class="col-form-label col-md-4">Fecha de nacimiento: <p style="color: red; display:inline">*</p> </label>
                                <div class="col-md-4">
                                    <input id="fechaNacimiento" name="fechaNacimiento" type="date" class="form-control" min="1950-02-20" max="2005-04-24" value="{{old('fechaNacimiento')}}">
                                </div>

                                <div class="col-md-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="line">
                                            @error('fechaNacimiento')
                                                    <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    @endif
                                </div>

                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>


                                <label for="" class="col-form-label col-md-4">Telefono del empleado: <p style="color: red; display:inline">*</p></label>
                                <div class="col-md-4">
                                    <input id="telefonoEmpleado" name="telefonoEmpleado" type="number" class="form-control" tabindex="4" value="{{old('telefonoEmpleado')}}">
                                </div>

                                <div class="col-md-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger" id="line">
                                            @error('telefonoEmpleado')
                                                    <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    @endif
                                </div>



                                <label for="" class="col-form-label col-md-12"></label>
                                <label for="" class="col-form-label col-md-12"></label>


                                <label for="" class="col-form-label col-md-4">Usuario del empleado: <p style="color: red; display:inline">*</p></label>
                                <div class="col-md-4">
                                    <select class="form-select form-select-lg md-4" name="usuarioT">
                                        @foreach ($usuario as $p)
                                            <option value="{{$p->id}}">{{$p->name}}</option>
                                        @endforeach
                                    </select>








                          <label for="" class="col-form-label col-md-4"></label>
                          <div class="col-md-8">
                          </div>

                            </div>
                          <a href="/empleado" class="btn btn-secondary" tabindex="5">Cancelar</a>
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

