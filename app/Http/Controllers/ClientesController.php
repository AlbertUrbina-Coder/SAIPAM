<?php

namespace App\Http\Controllers;

use App\Models\Ciudade;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
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
        $clientes =DB::table('clientes')
        ->join('ciudades', 'ciudades.id', '=', 'clientes.ciudad_id')
        ->select('*')
        ->get();

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudades = Ciudade::all();
        return view('/clientes.create', compact('ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCliente=new Clientes();
        $newCliente->nombreCliente=$request->get('nombre');
        $newCliente->ciudad_id=$request->get('ciudad');
        $newCliente->genero=$request->get('genero');
        $newCliente->fechaNacimiento=$request->get('fechaNacimiento');
        $newCliente->correo=$request->get('correo');
        $newCliente->telefono=$request->get('telefono');
        $newCliente->save();
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
    public function edit($id)
    {
        $cliente = Clientes::find($id);
        $ciudades= Ciudade::all();
        return view('clientes.edit', compact('cliente', 'ciudades'));
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
        $updateCliente= Clientes::find($id);
        $updateCliente->nombreCliente=$request->get('nombre');
        $updateCliente->ciudad_id=$request->get('ciudad');
        $updateCliente->genero=$request->get('genero');
        $updateCliente->fechaNacimiento=$request->get('fechaNacimiento');
        $updateCliente->correo=$request->get('correo');
        $updateCliente->telefono=$request->get('telefono');
        $updateCliente->save();
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente= Clientes::find($id);
        $cliente->delete();
        return redirect('/clientes');
    }
}
