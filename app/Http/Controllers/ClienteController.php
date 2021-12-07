<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\User;

use Barryvdh\DomPDF\Facade as PDF;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Cliente::all();
        $clientes = Cliente::all();
        return view('cliente.index')->with('clientes' , $clientes)->with('usuario',$usuario);;
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = user::all();
        return view('cliente.create')->with('usuario',$usuario);
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
            'nombre' => 'required|alpha|max:20',
            'telefono' => 'required|max:10|min:10',
            'documento' => 'required|max:10|min:10',
            'usuarioFK' => 'unique:clientes,usuarioFK',

        ], ['required'=>'Campo requerido', 'unique'=>'Este valor ya existe en la base de datos']);


        $clientes = new Cliente();
        $clientes->idCliente = $request->get('codigo');
        $clientes->nombreCliente = $request->get('nombre');
        $clientes->telefonoCliente = $request->get('telefono');
        $clientes->documentoCliente = $request->get('documento');
        $clientes->usuarioFK = $request->get('usuarioFK');



        $clientes->save();

        return redirect('/clientes');
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
    public function edit($idCliente)
    {
        $usuario = user::all();

        $cliente = Cliente::find($idCliente);
        return view('cliente.edit')->with('cliente', $cliente)->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCliente)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'documento' => 'required',
            'usuarioFK' => 'required|unique:clientes,usuarioFK',

        ], ['required'=>'Campo requerido', 'unique'=>'Este valor ya existe en la base de datos']);

        $cliente = Cliente::find($idCliente);

        $cliente->idCliente = $request->get('codigo');
        $cliente->nombreCliente = $request->get('nombre');
        $cliente->telefonoCliente = $request->get('clave');
        $cliente->telefonoCliente = $request->get('telefono');
        $cliente->documentoCliente = $request->get('documento');
        $cliente->usuarioFK = $request->get('usuarioFK');

        $cliente->save();

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCliente)
    {
        $cliente = Cliente::find($idCliente);
        $cliente->delete();
        return redirect('/clientes');
    }
}
