<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colorproducto;


use Barryvdh\DomPDF\Facade as PDF;

class colorProductoController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-colorProducto|crear-colorProducto|editar-colorProducto|borrar-colorProducto')->only=('index');
        $this->middleware('permission:crear-colorProducto', ['only'=>['create','store']]);
        $this->middleware('permission:editar-colorProducto', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-colorProducto', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colorProducto = Colorproducto::all();
        return view('colorProducto.index')->with('colorProducto',$colorProducto);
    }

    public function pdf()
    {
        $colorProducto = Colorproducto::all();

        $pdf = PDF::loadView('colorProducto.pdf', ['colorProducto'=>$colorProducto]);

        return $pdf->stream();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colorProducto.create');
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
            'nombreColor' => 'required|max:20|alpha|unique:colorproductos,colorProducto',
        ], ['required'=>'campo requerido'], ['unique'=>'este valor ya existe en la base de datos']);

        $colorProducto = new Colorproducto();
        $colorProducto->colorProducto = $request->get('nombreColor');


        $colorProducto->save();
        return redirect('/colorProducto');
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
    public function edit($idColorProducto)
    {
        $colorProducto = Colorproducto::find($idColorProducto);
        return view('colorProducto.edit')->with('colorProducto',$colorProducto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idColorProducto)
    {
        $colorProducto = Colorproducto::find($idColorProducto);

        $colorProducto->colorProducto = $request->get('nombreColor');

        $colorProducto->save();
        return redirect('/colorProducto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idColorProducto)
    {
        $colorProducto = Colorproducto::find($idColorProducto);
        $colorProducto->delete();
        return redirect('/colorProducto');
    }
}
