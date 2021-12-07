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
                            <h3 class="text-center">Empleado</h3>

                                <a class="btn btn-warning" href={{ route('imagen.create')}}>Nuevo</a>


                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <tr>
                                            <th style="color:#fff">ID</th>
                                            <th style="color:#fff">Nombre</th>
                                            <th style="color:#fff">Imagen</th>
                                            <th style="color:#fff">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                              @forelse ($imagen as $image)
                                                <tr>
                                                  <td>{{ $image->idImagen }}</td>
                                                  <td>{{ $image->nombreImagen }}</td>
                                                  <td><img src="{{ asset('storage').'/'.$image->imageProducto }}" alt="" width="100"></td>

                                                    <td>

                                                         <a href="/imagen/{{$image->idImagen}}/edit" class="btn btn-warning">Editar</a>
                                                         <form action="{{ route('imagen.destroy',$image->idImagen) }}" class="formulario-eliminar" method="POST">
                                                             @csrf
                                                             @method('DELETE')
                                                         <button type="submit" class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                  </td>
                                                </tr>
                                              @empty
                                                <tr>
                                                  <td colspan="2">Sin imagenes</td>
                                                </tr>
                                              @endforelse

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

