<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ImagenController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-imagen|crear-imagen|editar-imagen|borrar-imagen')->only=('index');
        $this->middleware('permission:crear-imagen', ['only'=>['create','store']]);
        $this->middleware('permission:editar-imagen', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-imagen', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagen = Imagen::all();
        return view('imagen.index', compact('imagen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imagen.create');
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
            'nombreImagen' => 'required|max:50|unique:imagens,nombreImagen',
            'imageProducto' => 'required|image']
            , ['image'=>'Debe seleccionar un archivo de tipo imagen', 'unique'=>'Este valor ya existe en la base de datos']);

        $imagen = $request->all();
        $imagen['uuid'] = (string) Str::uuid();

        if($request->hasFile('imageProducto')){

            $imagen['imageProducto'] = 'imagenes/'. time() . '_' . $request->file('imageProducto')->getClientOriginalName();
            $request->file('imageProducto')->storeAs('public', $imagen['imageProducto']);

            //$imagen['imageProducto'] = $request->file('imageProducto')->store('imagenes');

        }

        Imagen::create($imagen);
        return redirect()->route('imagen.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function show(Imagen $imagen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function edit(Imagen $imagen)
    {
       return view('imagen.edit', compact('imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imagen $imagen)
    {
        {
            $request->validate([
                'nombreImagen' => 'required|unique:imagens,nombreImagen',
                'imageProducto' => 'required|image'
            ],['image'=>'Debe seleccionar un archivo de tipo imagen ', 'unique'=>'Este valor ya existe en la base de datos']);

            $imagen->update($request->only(['uuid','nombreImagen', 'idProductoFK' ]));

            if($request->hasFile('imageProducto')){

                $imagen['imageProducto'] = 'imagenes/'. time() . '_' . $request->file('imageProducto')->getClientOriginalName();
                $request->file('imageProducto')->storeAs('public', $imagen['imageProducto']);

                // $imagen['imageProducto'] = $request->file('imageProducto')->store('imagenes');
                // if($imagen->imageProducto != '')
                // {
                //     unlink(storage_path('app/public/' . $imagen->imageProducto));
                // }

                $imagen->update(['imageProducto' => $imagen->imageProducto]);
            }

            return redirect()->route('imagen.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen = Imagen::find($id);
        Storage::delete('public'.$imagen->imageProducto);
        $imagen->delete();
        return redirect('/imagen');
    }
}
