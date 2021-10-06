<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\Ciudade;
use App\Models\Locaciones;
use App\Models\Productore;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$consulta = "SELECT A.*, B.nombreProductor, C.nombreCiudad, D.nombreLocacion FROM eventos A, productores B, ciudades C, locaciones D  WHERE A.idProductor = B.idProductor AND A.idCiudad = C.id AND A.idLocacion = D.idLocacion";

        $consulta=DB::table('eventos')
        ->join('productores', 'productores.idProductor', '=', 'eventos.idProductor')
        ->join('ciudades', 'ciudades.id', '=', 'eventos.idCiudad')
        ->join('locaciones', 'locaciones.idLocacion', '=', 'eventos.idLocacion')
        ->select('*')
        ->get();

        return view('eventos.index', compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ciudades = Ciudade::all();
        $locaciones = Locaciones::all();
        $productores = Productore::all();
        return view('/eventos.create', compact('ciudades', 'productores', 'locaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEvento=new Eventos();
        $newEvento->titulo=$request->get('titulo');
        $newEvento->descripcionEvento=$request->get('descripcionEvento');
        $newEvento->tipo=$request->get('tipo');
        $newEvento->categoria=$request->get('categoria');
        $newEvento->idProductor=$request->get('productor');
        $newEvento->idCiudad=$request->get('ciudad');
        $newEvento->idLocacion=$request->get('locacion');
        $newEvento->fecha_hora=$request->get('fecha_hora');
        $newEvento->costo=$request->get('costo');
        $newEvento->save();
        return redirect('/eventos');
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
        $evento = Eventos::find($id);
        $ciudades= Ciudade::all();
        $productores = Productore::all();
        $locaciones = Locaciones::all();
        return view('eventos.edit', compact('evento', 'ciudades', 'productores', 'locaciones'));

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
        $updateEvento= Eventos::find($id);
        $updateEvento->titulo=$request->get('titulo');
        $updateEvento->descripcionEvento=$request->get('descripcionEvento');
        $updateEvento->tipo=$request->get('tipo');
        $updateEvento->categoria=$request->get('categoria');
        $updateEvento->idProductor=$request->get('productor');
        $updateEvento->idCiudad=$request->get('ciudad');
        $updateEvento->idLocacion=$request->get('locacion');
        $updateEvento->fecha_hora=$request->get('fecha_hora');
        $updateEvento->costo=$request->get('costo');
        $updateEvento->save();
        return redirect('/eventos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento= Eventos::find($id);
        $evento->delete();
        return redirect('/eventos');
    }

    public function cierre($id){

        $balanceEvento = Eventos::find($id);
        return view('eventos.cierre', $balanceEvento);
    }

}

