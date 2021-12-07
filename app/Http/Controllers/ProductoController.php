<?php

namespace App\Http\Controllers;
use App\Models\Material;
use App\Models\producto;
use App\Models\TipoProducto;
use App\Models\ColorProducto;
use App\Models\Catalogo;
use App\Models\Imagen;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;

class ProductoController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-producto|crear-producto|editar-producto|borrar-producto');
        $this->middleware('permission:crear-roproductoles', ['only'=>['create','store']]);
        $this->middleware('permission:editar-producto', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-producto', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoProducto = producto::all();
        $colorProducto = producto::all();
        $material = producto::all();
        $producto = producto::all();
        $catalogo = producto::all();
        $imagen = producto::all();
        return view('producto.index')->with('producto',$producto)->with('material',$material)->with('tipoProducto',$tipoProducto)->with('colorProducto',$colorProducto)->with('catalogo',$catalogo)->with('imagen',$imagen);
    }

    public function pdf()
    {
        $producto = Producto::all();

        $pdf = PDF::loadView('producto.pdf', ['producto'=>$producto]);

        return $pdf->stream();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoProductos = Tipoproducto::all();
        $colorProductos = Colorproducto::all();
        $catalogo = Catalogo::all();
        $imagen = Imagen::all();
        $materiales = Material::all();
        return view('producto.create')->with('tipoProductos', $tipoProductos)->with('colorProductos', $colorProductos)->with('materiales', $materiales)->with('catalogo',$catalogo)->with('imagen',$imagen);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreProducto' => 'required|unique:productos,nombreProducto',
            'descripcionProducto' => 'required:productos,descripcioonProducto',
            'costoProducto' => 'required|unique:productos,costoProducto',
        ], ['required'=>'campo requerido'], ['unique'=>'este valor ya existe en la base de datos']);

        $producto = new producto();
        $producto->nombreProducto = $request->get('nombreProducto');
        $producto->descripcionProducto = $request->get('descripcionProducto');
        $producto->costoProducto = $request->get('costoProducto');
        $producto->idMaterialFK = $request->get('idMaterialFK');
        $producto->idTipoProductoFK = $request->get('idTipoProductoFK');
        $producto->idColorProductoFK = $request->get('ColorProducto');
        $producto->idCatalogoFK = $request->get('idCatalogoFK');
        $producto->idImagenFK = $request->get('idImagenFK');

        $producto->save();
        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoProductos = tipoProducto::all();
        $colorProductos = colorProducto::all();
        $materiales = material::all();
        $productos = producto::find($id);
        return view('producto.edit')->with('productos',$productos)->with('tipoProductos', $tipoProductos)->with('colorProductos', $colorProductos)->with('materiales', $materiales);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombreProducto' => 'required|unique:productos,nombreProducto',
            'descripcionProducto' => 'required:products,descripcioonProducto',
            'costoProducto' => 'required|unique:productos,costoProducto',
        ], ['required'=>'campo requerido'], ['unique'=>'este valor ya existe en la base de datos']);

        $producto = producto::find($id);

        $producto->nombreProducto = $request->get('nombreProducto');
        $producto->descripcionProducto = $request->get('descripcionProducto');
        $producto->costoProducto = $request->get('costoProducto');
        $producto->idMaterialFK = $request->get('idMaterialFK');
        $producto->idTipoProductoFK = $request->get('idTipoProductoFK');
        $producto->idColorProductoFK = $request->get('idColorProductoFK');

        $producto->save();
        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = producto::find($id);
        $producto->delete();
        return redirect('/producto');
    }
}
