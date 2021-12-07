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

                        </div>
                        <br><br>

                            <table id="tablaE">
                                <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Cliente</th>
                                    <th>Total</th>

                                    <th>Detalles</th>
                                    <th>Eliminar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ventas as $venta)
                                    <tr>
                                        <td>{{$venta->created_at}}</td>
                                        <td>{{$venta->cliente->nombreCliente}}</td>
                                        <td>${{number_format($venta->total, 2)}}</td>



                                        <td>
                                            <a class="btn btn-success" href="{{route("ventas.show", $venta)}}">
                                                <i class="fa fa-info"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{route("ventas.destroy", [$venta])}}" method="post">
                                                @method("delete")
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
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
                </div>
            </div>
        </div>
    </section>
@endsection

