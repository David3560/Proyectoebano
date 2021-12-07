@extends('layouts.plantillabase')



@section('contenido')

<h1>Lista de clientes</h1>
<a href="clientes/create" class="btn btn-primary" id="registro">Crear </a>




<br><br><br>
<table id="roles" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">telefono</th>
            <th scope="col">Documento</th>
            <th scope="col">ID usuario</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($clientes as $cliente)
       <tr>
           <td>{{ $cliente->idCliente}}</td>
           <td>{{ $cliente->nombreCliente}}</td>
           <td>{{ $cliente->telefonoCliente}}</td>
           <td>{{ $cliente->documentoCliente}}</td>
           <td>{{$cliente->usuarioFK}}</td>
           <td>
                <a href="/clientes/{{$cliente->idCliente}}/edit" class="btn btn-warning" >Editar</a>

                <form action="{{ route ('clientes.destroy', $cliente->idCliente)}}" class="formulario-eliminar" style="display: inline;" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="display: inline;">Borrar</button>
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

@stop
