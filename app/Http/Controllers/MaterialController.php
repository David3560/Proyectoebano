<?php

namespace App\Http\Controllers;

use App\Models\material;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;

class MaterialController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-material|crear-material|editar-material|borrar-material')->only=('index');
        $this->middleware('permission:crear-material', ['only'=>['create','store']]);
        $this->middleware('permission:editar-material', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-material', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $material = material::all();
        return view('material.index')->with('material',$material);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.create');
    }

    public function pdf()
    {
        $material = Material::all();

        $pdf = PDF::loadView('material.pdf', ['material'=>$material]);

        return $pdf->stream();

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
            'nombreMaterial' => 'required|max:20',
            'descripcionMaterial' => 'required|max:255|min:10',
            'costoMaterial' => 'required|numeric',

        ], ['required'=>'Campo requerido', 'unique'=>'Este valor ya existe en la base de datos']);

        $material = new material();
        $material->nombreMaterial = $request->get('nombreMaterial');
        $material->descripcionMaterial = $request->get('descripcionMaterial');
        $material->costoMaterial = $request->get('costoMaterial');

        $material->save();
        return redirect('/material');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\material  $material
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = material::find($id);
        return view('material.edit')->with('material',$material);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $material = material::find($id);

        $material->nombreMaterial = $request->get('nombreMaterial');
        $material->descripcionMaterial = $request->get('descripcionMaterial');
        $material->costoMaterial = $request->get('costoMaterial');

        $material->save();
        return redirect('/material');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = material::find($id);
        $material->delete();
        return redirect('/material');
    }
}
