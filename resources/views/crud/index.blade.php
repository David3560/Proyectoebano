@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">CRUD</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                            @can('crear-crud')
                            <a class="btn btn-warning" href="{{ route('crud.create') }}">Nuevo</a>
                            @endcan

                            <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <th style="display: none;">ID</th>
                                        <th style="color:#fff;">Titulo</th>
                                        <th style="color:#fff;">Campo de prueba</th>
                                        <th style="color:#fff;">Acciones</th>
                                </thead>
                                <tbody>
                                @foreach ($crud as $crud)
                                <tr>
                                    <td style="display: none;">{{ $crud->id }}</td>
                                    <td>{{ $crud->titulo }}</td>
                                    <td>{{ $crud->campoPrueba }}</td>
                                    <td>
                                        <form action="{{ route('crud.destroy',$crud->id) }}" method="POST">
                                            @can('editar-crud')
                                            <a class="btn btn-info" href="{{ route('crud.edit',$crud->id) }}">Editar</a>
                                            @endcan

                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-crud')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <!-- Ubicar la paginacion a la derecha -->
                            <div class="pagination justify-content-end">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
