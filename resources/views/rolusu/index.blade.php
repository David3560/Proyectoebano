@extends('layouts.plantillabase')

@section('title', 'Madwud')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('contenido')


<h1>Lista de roles</h1>




    <a href="rolusus/create" class="btn btn-primary" id="registro">Crear </a>

    <a href="#" class="btn btn-danger">PDF </a>

    <br><br><br>
    <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col" id="cort">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($rolusus as $rolusu)
        <tr>
            <td>{{ $rolusu->idRolusu}}</td>
            <td>{{ $rolusu->nombreRol}}</td>
            <td>

                    <form action="{{ route ('rolusus.destroy', $rolusu->idRolusu)}}" method="POST">
                    <a href="/rolusus/{{$rolusu->idRolusu}}/edit" class="btn btn-warning">Editar</a>
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
            </td>
        </tr>

        @endforeach
        </tbody>
    </table>





@section('js')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#articulos').DataTable({
                "lengthMenu": [[5,10, 50, -1], [5,10,50, "All"]]
            });
        } );
    </script>
@endsection

@stop
