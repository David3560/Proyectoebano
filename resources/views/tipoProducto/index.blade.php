@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">TIPOS DE PRODUCTOS</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Tipo producto</h3>

                                <a class="btn btn-warning" href={{ route('tipoProducto.create')}}>Nuevo</a>
                                <a href="{{ route('tipoProducto.pdf') }}" class="btn btn-danger">PDF </a>

                                <table class="table table-striped mt-2">
                                    <thead style="background-color:#6777ef">
                                        <th style="color:#fff">ID</th>
                                        <th style="color:#fff;">Tipo producto</th>
                                        <th style="color:#fff;">Acciones</th>
                                    </thead>

                            <tbody>
                                        @foreach ($tipoProducto as $tipoProducto)
                                        <tr>
                                        <td>{{$tipoProducto->idTipoProducto}}</td>
                                        <td>{{$tipoProducto->tipoProducto}}</td>
                                        <td>
                                        <form action="{{ route('tipoProducto.destroy',$tipoProducto->idTipoProducto) }}" method="POST">
                                        <a href="/tipoProducto/{{$tipoProducto->idTipoProducto}}/edit" class="btn btn-warning">Editar</a>
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

