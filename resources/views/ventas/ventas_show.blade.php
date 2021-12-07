@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ventas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Ventas</h3>

                            <div class="row">
                                <div class="col-12">
                                    <h1>Detalle de venta #{{$venta->id}}</h1>
                                    <h1>Cliente: <small>{{$venta->cliente->nombre}}</small></h1>
                                    @include("notificacion")
                                    <a class="btn btn-info" href="{{route("ventas.index")}}">
                                        <i class="fa fa-arrow-left"></i>&nbsp;Volver
                                    </a>
                                    <br>
                                    <br>
                                    <h2>Productos</h2>


                                    <br>
                                    <br>
                                    <br>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripcion del producto</th>
                                            <th>Precio</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($venta->productos as $producto)
                                            <tr>
                                                <td>{{$producto->nombreProducto}}</td>
                                                <td>{{$producto->descripcionProducto}}</td>
                                                <td>${{number_format($producto->costoProducto, 2)}}</td>


                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="2"><strong>Total</strong></td>

                                            <td>${{number_format($total, 2)}}</td>
                                        </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>

                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

