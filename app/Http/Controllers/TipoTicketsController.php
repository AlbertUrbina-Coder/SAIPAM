<?php

namespace App\Http\Controllers;

use App\Models\TipoTickets;
use App\Models\Eventos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TipoTicketsController extends Controller
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
        $consulta=DB::table('tipo_tickets')
        ->join('eventos', 'eventos.idEvento', '=', 'tipo_tickets.idEvento')
        ->select('*')
        ->get();

        return view('tipo_tickets.index', compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $eventos = Eventos::all();
        return view('/tipo_tickets.create', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTipoTicket=new TipoTickets();
        $newTipoTicket->idEvento=$request->get('evento');
        $newTipoTicket->sector=$request->get('sector');
        $newTipoTicket->descripcion=$request->get('descripcion');
        $newTipoTicket->subtotal=$request->get('subtotal');
        $newTipoTicket->iva=$request->get('iva');
            $subtotal=$request->get('subtotal');
            $iva=$request->get('iva');
        $newTipoTicket->valorTotal=($subtotal*($iva/100))+$subtotal;
        $newTipoTicket->cantidadTotal=$request->get('cantidadTotal');
        $newTipoTicket->cantidadVendida=$request->get('cantidadVendida');
        $newTipoTicket->save();
        return redirect('/tipo_tickets');
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
        $tipoTicket= TipoTickets::find($id);
        $eventos = Eventos::all();
        return view('tipo_tickets.edit', compact('tipoTicket', 'eventos'));

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
        $updateTipoTicket= TipoTickets::find($id);
        $updateTipoTicket->idEvento=$request->get('evento');
        $updateTipoTicket->sector=$request->get('sector');
        $updateTipoTicket->descripcion=$request->get('descripcion');
        $updateTipoTicket->subtotal=$request->get('subtotal');
        $updateTipoTicket->iva=$request->get('iva');
        $updateTipoTicket->valorTotal=($request->get('subtotal')*($request->get('iva')/100))+$request->get('subtotal');
        $updateTipoTicket->cantidadTotal=$request->get('cantidadTotal');
        $updateTipoTicket->cantidadVendida=$request->get('cantidadVendida');
        $updateTipoTicket->save();
        return redirect('/tipo_tickets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoTicket= TipoTickets::find($id);
        $tipoTicket->delete();
        return redirect('/tipo_tickets');
    }
}
