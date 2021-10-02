<?php

namespace App\Http\Controllers;

use App\Models\Locaciones;
use Illuminate\Support\Facades\DB;
use App\Models\Ciudade;
use App\Models\Country;
use Illuminate\Http\Request;

class LocacionesController extends Controller
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
        $data=DB::table('locaciones')
        ->join('ciudades', 'ciudades.id', '=', 'locaciones.idCiudad')
        ->select('*')
        ->get();
        return view('locaciones.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ciudades = Ciudade::all();
        return view('/locaciones.create', compact('ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newLocacion=new Locaciones();
        $newLocacion->tipoLocacion=$request->get('tipoLocacion');
        $newLocacion->nombreLocacion=$request->get('nombreLocacion');
        $newLocacion->idCiudad=$request->get('ciudad');
        $newLocacion->capacidad=$request->get('capacidad');
        $newLocacion->direccion=$request->get('direccion');
        $newLocacion->correoContacto=$request->get('correo');
        $newLocacion->valorAlquiler=$request->get('valorAlquiler');
        $newLocacion->save();
        return redirect('/locaciones');
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
        $locacion = Locaciones::find($id);
        $ciudades= Ciudade::all();
        return view('locaciones.edit', compact('locacion', 'ciudades'));

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
        $updateLocacion= Locaciones::find($id);
        $updateLocacion->tipoLocacion=$request->get('tipoLocacion');
        $updateLocacion->nombreLocacion=$request->get('nombreLocacion');
        $updateLocacion->idCiudad=$request->get('ciudad');
        $updateLocacion->capacidad=$request->get('capacidad');
        $updateLocacion->direccion=$request->get('direccion');
        $updateLocacion->correoContacto=$request->get('correo');
        $updateLocacion->valorAlquiler=$request->get('valorAlquiler');
        $updateLocacion->save();
        return redirect('/locaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locacion= Locaciones::find($id);
        $locacion->delete();
        return redirect('/locaciones');
    }

    public function getCiudades(Request $request)
    {
        if($request->ajax()){
            $ciudades = Ciudade::where('countries_id', $request->countries_id)->get();
            foreach($ciudades as $ciudad){
                $ciudadesArray[$ciudad->id] = $ciudad->nombreCiudad;
            }
            return response()->json($ciudadesArray);
        }

    }

}
