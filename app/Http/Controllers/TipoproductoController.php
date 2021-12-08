<?php

namespace App\Http\Controllers;

use App\Models\Tipoproducto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class tipoProductoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-tipoProducto|crear-tipoProducto|editar-tipoProducto|borrar-tipoProducto')->only=('index');
        $this->middleware('permission:crear-tipoProducto', ['only'=>['create','store']]);
        $this->middleware('permission:editar-tipoProducto', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-tipoProducto', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoProducto = Tipoproducto::all();
        return view('tipoProducto.index')->with('tipoProducto',$tipoProducto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pdf()
    {
        $tipoProducto = Tipoproducto::all();

        $pdf = PDF::loadView('tipoProducto.pdf', ['tipoProducto'=>$tipoProducto]);

        return $pdf->stream();

    }
    public function create()
    {
        return view('tipoProducto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $tipoProducto = new Tipoproducto();
        $tipoProducto->tipoProducto = $request->get('tipoDeProducto');

        $tipoProducto->save();
        return redirect('/tipoProducto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoProducto = Tipoproducto::find($id);
        return view('tipoProducto.edit')->with('tipoProducto',$tipoProducto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipoProducto = Tipoproducto::find($id);

        $tipoProducto->tipoProducto = $request->get('tipoDeProducto');

        $tipoProducto->save();
        return redirect('/tipoProducto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoProducto = Tipoproducto::find($id);
        $tipoProducto->delete();
        return redirect('/tipoProducto');
    }
}
