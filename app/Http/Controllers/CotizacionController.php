<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cotizacion;
use App\Models\Producto;
use App\Models\ProductoCotizado;
use App\Models\Cliente;




class CotizacionController extends Controller
{

    public function terminarOCancelarVenta(Request $request)
    {
        if ($request->input("accion") == "terminar") {
            return $this->terminarVenta($request);

        } else {
            return $this->cancelarVenta();
        }
    }

    public function terminarVenta(Request $request)
    {
        // Crear una venta
        $venta = new Cotizacion();
        $venta->idCliente = $request->input("idCliente");
        $venta->saveOrFail();
        $idVenta = $venta->id;
        $productos = $this->obtenerProductos();
        // Recorrer carrito de compras
        foreach ($productos as $producto) {
            // El producto que se vende...
            $productoVendido = new ProductoCotizado();
            $productoVendido->fill([
                "id_cotizacion" => $idVenta,
                "nombreProducto" => $producto->nombreProducto,
                "descripcionProducto" => $producto->descripcionProducto,
                "costoProducto" => $producto->costoProducto,
            ]);
            // Lo guardamos
            $productoVendido->saveOrFail();
            // Y restamos la existencia del original

        }
        $this->vaciarProductos();
        return redirect()
            ->route("cotizacion.index")
            ->with("mensaje", "Venta terminada");
    }

    private function obtenerProductos(){
        $productos = session("productos");
        if(!$productos){
            $productos = [];
        }
        return $productos;
    }

    private function vaciarProductos()
    {
        $this->guardarProductos(null);
    }

    private function guardarProductos($productos){
        session(["productos" => $productos,
        ]);
    }

    public function cancelarVenta()
    {
        $this->vaciarProductos();
        return redirect()
            ->route("cotizacion.index")
            ->with("mensaje", "Venta cancelada");
    }

    public function quitarProductoDeCotizacion(Request $request)
    {
        $indice = $request->post("indice");
        $productos = $this->obtenerProductos();
        array_splice($productos, $indice, 1);
        $this->guardarProductos($productos);
        return redirect()
            ->route("cotizacion.index");
    }

    public function agregarProductoVenta(Request $request)
    {
        $idProducto = $request->post("idProducto");
        $producto = Producto::where("idProducto", "=", $idProducto)->first();
        if (!$producto) {
            return redirect()
                ->route("cotizacion.index")
                ->with("mensaje", "Producto no encontrado");
        }

        $this->agregarProductoACarrito($producto);
        return redirect()
            ->route("cotizacion.index");
    }

    private function agregarProductoACarrito($producto)
    {

        $productos = $this->obtenerProductos();

        // Es decir, producto no fue encontrado

        $posibleIndice = $this->buscarIndiceDeProducto($producto->idProducto, $productos);

        if ($posibleIndice === -1) {
            $producto->cantidad = 1;
            array_push($productos, $producto);
        } else {
            if ($productos[$posibleIndice]->cantidad + 1 > $producto->existencia) {
                return redirect()->route("cotizacion.index")
                    ->with([
                        "mensaje" => "No se pueden agregar más productos de este tipo, se quedarían sin existencia",
                        "tipo" => "danger"
                    ]);
            }
            $productos[$posibleIndice]->cantidad++;
        }
        $this->guardarProductos($productos);
    }

    private function buscarIndiceDeProducto(string $codigo, array &$productos)
    {
        foreach ($productos as $indice => $producto) {
            if ($producto->idProducto === $codigo) {
                return $indice;
            }
        }
        return -1;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = 0;
        foreach ($this->obtenerProductos() as $producto) {
            $total += $producto->costoProducto;
        }
        return view("cotizacion.index",
            [
                "total" => $total,
                "clientes" => Cliente::all(),
            ]);
    }


}
