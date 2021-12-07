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
                            <h3 class="text-center">Material</h3>

                                <a class="btn btn-warning" href={{ route('material.create')}}>Nuevo</a>
                                <a href="{{ route('material.pdf') }}" class="btn btn-danger">PDF </a>

                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                      <tr>
                                        <th style="color:#fff">ID</th>
                                        <th style="color:#fff">Nombre material</th>
                                        <th style="color:#fff">Descripcion material</th>
                                        <th style="color:#fff">Costo material</th>
                                        <th style="color:#fff">Acciones</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($material as $material)
                                        <tr>
                                            <td>{{$material->idMaterial}}</td>
                                            <td>{{$material->nombreMaterial}}</td>
                                            <td>{{$material->descripcionMaterial}}</td>
                                            <td>{{$material->costoMaterial}}</td>
                                            <td>


                                              <form action="{{ route('material.destroy',$material->idMaterial) }}" class="formulario-eliminar" method="POST">
                                                <a href="/material/{{$material->idMaterial}}/edit" class="btn btn-warning">Editar</a>
                                                  @csrf
                                                  @method('DELETE')
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                             </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                      </tbody>



                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

