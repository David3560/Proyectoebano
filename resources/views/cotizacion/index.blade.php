@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Cotizacion</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Cotizaciones</h3>

                            <div class="col-12">
                                <h1>Realizar cotizacion <i class="fa fa-cart-plus"></i></h1>
                                @include("notificacion")
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <form action="{{route("terminarOCancelarVenta")}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="idCliente">Cliente</label>
                                                <select required class="form-control" name="idCliente" id="idCliente">
                                                    <option value="" disabled>seleccione la marca</option>
                                                    @foreach($clientes as $cliente)

                                                        <option value="{{$cliente->idCliente}}">{{$cliente->nombreCliente}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <br>
                                            @if(session("productos") !== null)

                                                <div class="form-group">
                                                    <button name="accion" value="terminar" type="submit" class="btn btn-success">Terminar
                                                        venta
                                                    </button>
                                                    <button name="accion" value="cancelar" type="submit" class="btn btn-danger">Cancelar
                                                        venta
                                                    </button>
                                                </div>
                                            @endif
                                        </form>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <form action="{{route("agregarProductoVenta")}}" method="post" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="idProducto">Codigo del producto</label>
                                                <input id="idProducto" autocomplete="off" required autofocus name="idProducto" type="text"
                                                       class="form-control"
                                                       placeholder="Código de producto">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @if(session("productos") !== null)
                                    <h2>Total: ${{number_format($total, 2)}}</h2>
                                    <div class="table-responsive">
                                        <table  id="tablaC">
                                            <thead>
                                            <tr>
                                                <th>Código de barras</th>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Costo</th>
                                                <th>Quitar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(session("productos") as $producto)
                                                <tr>
                                                    <td>{{$producto->idProducto}}</td>
                                                    <td>{{$producto->nombreProducto}}</td>
                                                    <td>{{$producto->descripcionProducto}}</td>
                                                    <td>{{$producto->costoProducto}}</td>

                                                    <td>
                                                        <form action="{{route("quitarProductoDeVenta")}}" method="post">
                                                            @method("delete")
                                                            @csrf
                                                            <input type="hidden" name="indice" value="{{$loop->index}}">
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
                                @else
                                    <h2>Aquí aparecerán los productos de la venta
                                        <br>
                                        Escanea el código de barras o escribe y presiona Enter</h2>
                                @endif
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

