<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class EmpleadoController extends Controller
{


    function __construct()
    {
        $this->middleware('permission:ver-empleado|crear-empleado|editar-empleado|borrar-empleado')->only=('index');
        $this->middleware('permission:crear-empleado', ['only'=>['create','store']]);
        $this->middleware('permission:editar-empleado', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-empleado', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = empleado::all();
        $empleado = empleado::all();
        return view('empleado.index')->with('empleado',$empleado);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = User::all();
        return view('empleado.create')->with('usuario',$usuario);
    }

    public function pdf()
    {
        $empleado = empleado::all();

        $pdf = PDF::loadView('empleado.pdf', ['empleado'=>$empleado]);

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
            'nombreEmpleado' => 'required|max:20',
            'documentoEmpleado' => 'required|max:10|min:10|unique:empleados,documentoEmpleado',
            'fechaNacimiento' => 'required',
            'telefonoEmpleado' => 'required|max:10|min:9|unique:empleados,telefonoEmpleado',
            'usuarioFK' => 'unique:empleados,usuarioFK',

        ], ['required'=>'Campo requerido', 'unique'=>'Este valor ya existe en la base de datos']);

        $empleado = new empleado();
        $empleado->nombreEmpleado = $request->get('nombreEmpleado');
        $empleado->documentoEmpleado = $request->get('documentoEmpleado');
        $empleado->fechaNacimiento = $request->get('fechaNacimiento');
        $empleado->telefonoEmpleado = $request->get('telefonoEmpleado');
        $empleado->usuarioFK = $request->get('usuarioT');

        $empleado->save();
        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($idEmpleado)
    {
        $usuario = user::all();
        $empleado = empleado::find($idEmpleado);
        return view('empleado.edit')->with('empleado',$empleado)->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idEmpleado)
    {
        $request->validate([
            'nombreEmpleado' => 'required',
            'documentoEmpleado' => 'required|unique:empleados,documentoEmpleado',
            'fechaNacimiento' => 'required',
            'telefonoEmpleado' => 'required|unique:empleados,telefonoEmpleado',
            'usuarioFK' => 'required|unique:empleados,usuarioFK',

        ], ['required'=>'Campo requerido', 'unique'=>'Este valor ya existe en la base de datos']);

        $empleado = empleado::find($idEmpleado);

        $empleado->nombreEmpleado = $request->get('nombreEmpleado');
        $empleado->documentoEmpleado = $request->get('documentoEmpleado');
        $empleado->fechaNacimiento = $request->get('fechaNacimiento');
        $empleado->telefonoEmpleado = $request->get('telefonoEmpleado');
        $empleado->usuarioFK = $request->get('usuarioFK');

        $empleado->save();
        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEmpleado)
    {
        $empleado = empleado::find($idEmpleado);
        $empleado->delete();
        return redirect('/empleado');
    }


    //public function dowloadPDF()
    //{
   //     $empleado = empleado::all();


    //    $pdf = \App::make('dompdf.wrapper');

    //    $pdf = PDF::loadView('empleado/index', compact('empleado'));

   //     return $pdf->download('empleado.pdf');
  //  }
}
