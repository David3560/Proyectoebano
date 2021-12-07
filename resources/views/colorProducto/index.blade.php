@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Producto color</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Color de producto</h3>

                                <a class="btn btn-warning" href={{ route('colorProducto.create')}}>Nuevo</a>
                                <a href="{{ route('colorProducto.pdf') }}" class="btn btn-danger">PDF </a>

                                <table class="table table-striped mt-2" >

                                    <thead style="background-color:#6777ef">
                                        <tr>
                                            <th style="color:#fff">ID</th>
                                            <th style="color:#fff">Nombre color</th>
                                            <th style="color:#fff">Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($colorProducto as $colorProducto)
                                        <tr>
                                            <td>{{$colorProducto->idColorProducto}}</td>
                                            <td>{{$colorProducto->colorProducto}}</td>
                                            <td>
                                                <!-- Bootstrap CSS -->
                                            <form action="{{ route('colorProducto.destroy',$colorProducto->idColorProducto) }}" method="POST">
                                            <a href="/colorProducto/{{$colorProducto->idColorProducto}}/edit" class="btn btn-warning">Editar</a>
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

