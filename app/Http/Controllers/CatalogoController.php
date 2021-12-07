<?php

namespace App\Http\Controllers;
use App\Models\Catalogo;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class CatalogoController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-catalogo|crear-catalogo|editar-catalogo|borrar-catalogo')->only=('index');
        $this->middleware('permission:crear-catalogo', ['only'=>['create','store']]);
        $this->middleware('permission:editar-catalogo', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-catalogo', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $empleado = Catalogo::All();
        $catalogos = Catalogo::all();
        return view('catalogo.index')->with('catalogos',$catalogos)->with('empleado', $empleado);
        //dd($empleado->catalogo);
    }

    public function pdf()
    {
        $catalogos = Catalogo::all();

        $pdf = PDF::loadView('catalogo.pdf', ['catalogos'=>$catalogos]);

        return $pdf->stream();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = empleado::all();
        return view('catalogo.create')->with('empleados',$empleados);

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
            'categoriaCatalogo' => 'required|alpha',
        ], ['required'=>'campo requerido'], ['unique'=>'este valor ya existe en la base de datos']);

        $catalogo = new Catalogo();
        $catalogo->categoriaCatalogo = $request->get('categoriaCatalogo');
        $catalogo->empleadoFK = $request->get('idEmpleadoFK');

        $catalogo->save();
        return redirect('/catalogo');
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
        $empleados = empleado::all();
        $catalogos = catalogo::find($id);
        return view('catalogo.edit')->with('catalogo',$catalogos)->with('empleados',$empleados);
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
        $request->validate([
            'categoriaCatalogo' => 'required|max:35|alpha|unique:catalogos,categoriaCatalogo',
        ], ['required'=>'campo requerido'], ['unique'=>'este valor ya existe en la base de datos']);

        $catalogo = catalogo::find($id);

        $catalogo->categoriaCatalogo = $request->get('categoriaCatalogo');
        $catalogo->empleadoFK = $request->get('idEmpleadoFK');

        $catalogo->save();
        return redirect('/catalogo');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalogo = catalogo::find($id);
        $catalogo->delete();
        return redirect('/catalogo');
    }
}
