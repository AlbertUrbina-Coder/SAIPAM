<?php

namespace App\Http\Controllers;

use App\Models\Productore;
use Illuminate\Http\Request;
use App\Models\Ciudade;
use Illuminate\Support\Facades\DB;

class ProductoreController extends Controller
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
        $productores=DB::table('productores')
        ->join('ciudades', 'ciudades.id', '=', 'productores.idCiudad')
        ->select('*')
        ->get();
        return view('productores.index', compact('productores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudades = Ciudade::all();
        return view('/productores.create', compact('ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProductor=new Productore();
        $newProductor->nombreProductor=$request->get('nombreProductor');
        $newProductor->tipoDocumento=$request->get('tipoDocumento');
        $newProductor->numeroDocumento=$request->get('numDocumento');
        $newProductor->registroMinCultura=$request->get('registroMinCultura');
        $newProductor->correo=$request->get('correo');
        $newProductor->telefono=$request->get('telefono');
        $newProductor->idCiudad=$request->get('ciudad');
        $newProductor->direccion=$request->get('direccion');
        $newProductor->save();
        return redirect('/productores');
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
        $productor = Productore::find($id);
        $ciudades= Ciudade::all();
        return view('productores.edit', compact('productor', 'ciudades'));
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
        $updateProductor= Productore::find($id);
        $updateProductor->nombreProductor=$request->get('nombreProductor');
        $updateProductor->tipoDocumento=$request->get('tipoDocumento');
        $updateProductor->numeroDocumento=$request->get('numDocumento');
        $updateProductor->registroMinCultura=$request->get('registroMinCultura');
        $updateProductor->correo=$request->get('correo');
        $updateProductor->telefono=$request->get('telefono');
        $updateProductor->idCiudad=$request->get('ciudad');
        $updateProductor->direccion=$request->get('direccion');
        $updateProductor->save();
        return redirect('/productores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente= Productore::find($id);
        $cliente->delete();
        return redirect('/productores');
    }
}
