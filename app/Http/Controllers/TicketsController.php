<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use App\Models\Eventos;
use App\Models\Clientes;
use App\Models\TipoTickets;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TicketsController extends Controller
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
        $consulta=DB::table('tickets')
        ->join('eventos', 'eventos.idEvento', '=', 'tickets.idEvento')
        ->join('tipo_tickets', 'tipo_tickets.idTipoTicket', '=', 'tickets.idTipoTicket')
        ->join('clientes', 'clientes.idCliente', '=', 'tickets.idCliente')
        ->select('*')
        ->get();

        return view('tickets.index', compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $eventos = Eventos::all();
        $tipoTickets = TipoTickets::all();
        $clientes = Clientes::all();
        return view('/tickets.create', compact('eventos', 'tipoTickets', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTicket=new Tickets();
        $newTicket->idEvento=$request->get('evento');
        $newTicket->idTipoTicket=$request->get('tipoTicket');
        $newTicket->idCliente=$request->get('cliente');
        $newTicket->fila=$request->get('fila');
        $newTicket->silla=$request->get('silla');
        $newTicket->palco=$request->get('palco');
        $newTicket->save();
        return redirect('/tickets');
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
        $ticket= Tickets::find($id);
        $eventos = Eventos::all();
        $tipoTickets = TipoTickets::all();
        $clientes = Clientes::all();

        return view('/tickets.create', compact('ticket', 'eventos', 'tipoTickets', 'clientes'));

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
        $updateTicket= Tickets::find($id);
        $updateTicket->idEvento=$request->get('evento');
        $updateTicket->idTipoTicket=$request->get('tipoTicket');
        $updateTicket->idCliente=$request->get('cliente');
        $updateTicket->fila=$request->get('fila');
        $updateTicket->silla=$request->get('silla');
        $updateTicket->palco=$request->get('palco');
        $updateTicket->save();
        return redirect('/tickets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket= Tickets::find($id);
        $ticket->delete();
        return redirect('/tickets');
    }
}
