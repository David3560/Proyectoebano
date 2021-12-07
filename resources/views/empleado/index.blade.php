@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Empleados</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Empleados</h3>


                            <a href="empleado/create" class="btn btn-primary" id="registro">Crear</a>

                            <a href="{{ route('empleado.pdf') }}" class="btn btn-danger">PDF </a>


                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                  <tr>
                                    <th style="color:#fff;">ID</th>
                                    <th style="color:#fff;">Nombre Empleado</th>
                                    <th style="color:#fff;">Documento Empleado</th>
                                    <th style="color:#fff;">Fecha Nacimiento</th>
                                    <th style="color:#fff;">Telefono Empleado</th>
                                    <th style="color:#fff;">ID usuario</th>
                                    <th style="color:#fff;">Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleado as $empleado)
                                    <tr>
                                        <td>{{$empleado->idEmpleado}}</td>
                                        <td>{{$empleado->nombreEmpleado}}</td>
                                        <td>{{$empleado->documentoEmpleado}}</td>
                                        <td>{{$empleado->fechaNacimiento}}</td>
                                        <td>{{$empleado->telefonoEmpleado}}</td>
                                        <td>{{$empleado->usuarioFK}}</td>
                                        <td>
                                         <form action="{{ route('empleado.destroy',$empleado->idEmpleado) }}"  class="formulario-eliminar" method="POST">
                                          <a href="/empleado/{{$empleado->idEmpleado}}/edit" class="btn btn-warning">Editar</a>
                                              @csrf
                                              @method('DELETE')
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                         </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                                @stop

                        @section('css')
                            <link rel="stylesheet" href="/css/admin_custom.css">
                            <link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
                        @stop

                        @section('js')

                            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                            <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
                            <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>

                            <script>
                                $(document).ready(function() {
                                    $('#roles').DataTable({
                                        "lengthMenu": [[5,10, 50, -1], [5,10,50, "All"]]
                                    });
                                } );
                            </script>

                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                        <script>

                            $('.formulario-eliminar').submit(function(e){
                                e.preventDefault();

                                Swal.fire({
                                title: '¿Estas seguro?',
                                text: "No podras reevertir esta accion!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Si, eliminalo!',
                                cancelButtonText: 'Cancelar'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire(
                                    'Eliminado!',
                                    'El Registro se ha eliminado.',
                                    'success'
                                    )

                                    this.submit();
                                }
                                })
                            });


                        </script>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

