@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Dashboard Usuarios</h3>


                            <a class="btn btn-danger" href="{{route('usuarios.create')}}">Nuevo</a>
                            <a href="{{ route('usuarios.pdf') }}" class="btn btn-danger">PDF </a>


                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">E-mail</th>
                                    <th style="color:#fff;">Rol</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                      <tr>
                                        <td style="display: none;">{{ $usuario->id }}</td>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>
                                          @if(!empty($usuario->getRoleNames()))
                                            @foreach($usuario->getRoleNames() as $rolNombre)
                                              <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                            @endforeach
                                          @endif
                                        </td>

                                        <td>
                                          <a class="btn btn-info" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>

                                          {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
                                              {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                          {!! Form::close() !!}
                                        </td>
                                      </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Centrar la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $usuarios->links() !!}
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

