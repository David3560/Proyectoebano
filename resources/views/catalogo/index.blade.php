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
                            <h3 class="text-center">Catalogo</h3>

                            <a href="catalogo/create" class="btn btn-primary" id="registro">Crear</a>

                            <a href="{{ route('catalogo.pdf') }}" class="btn btn-danger">PDF </a>



                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <tr>
                                          <th style="color:#fff">ID</th>
                                          <th style="color:#fff">Categorias catalogo</th>
                                          <th style="color:#fff">Id empleado</th>
                                          <th style="color:#fff">Acciones</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($catalogos as $catalogo)
                                          <tr>
                                              <td>{{$catalogo->idCatalogo}}</td>
                                              <td>{{$catalogo->categoriaCatalogo}}</td>
                                              <td>{{$catalogo->empleadoFK}}</td>
                                              <td>
                                                  <!-- Bootstrap CSS -->

                                                <a href="/catalogo/{{$catalogo->idCatalogo}}/edit" class="btn btn-warning">Editar</a>
                                                <form action="{{ route('catalogo.destroy',$catalogo->idCatalogo) }}" class="formulario-eliminar" method="POST">

                                                    @csrf
                                                    @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                               </form>
                                              </td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                      </table>


                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

