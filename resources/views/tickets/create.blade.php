@extends('adminlte::page')

@section('title', 'Tickets')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div>
        <h1 class="page-header">Nuevo Tipo de Ticket</h1>
    </div>

<form action="/tickets" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf

    <div class="form-group">
        <label>Eventos</label>
        <select class="form-control" type="text" name="evento" id="evento" required="">
            <option selected value="">Seleccione el productor encargado del evento:</option>
            @foreach($eventos as $evento)
                <option value="{{$evento['idEvento']}}">{{ $evento['titulo']}}</option>
            @endforeach
          </select>
    </div>

    <div class="form-group">
        <label>Tipo Ticket</label>
        <select class="form-control" type="text" name="tipoTicket" id="tipoTicket" required="">
            <option selected value="">Seleccione el productor encargado del evento:</option>
            @foreach($tipoTickets as $tipoTicket)
                <option value="{{$tipoTicket['idTipoTicket']}}">{{ $tipoTicket['sector']}}</option>
            @endforeach
          </select>
    </div>

    <div class="form-group">
        <label>Cliente</label>
        <select class="form-control" type="text" name="cliente" id="cliente" required="">
            <option selected value="">Seleccione el productor encargado del evento:</option>
            @foreach($clientes as $cliente)
                <option value="{{$cliente['idCliente']}}">{{ $cliente['nombreCliente']}}</option>
            @endforeach
          </select>
    </div>

    <div class="form-group">
        <label>Fila</label>
        <input class="form-control" type="text" name="fila" id="fila" placeholder="Ingrese el numero de fila">
    </div>

    <div class="form-group">
        <label>Silla</label>
        <input class="form-control" type="text" name="silla" id="silla" placeholder="Ingrese el numero de silla">
    </div>

    <div class="form-group">
        <label>Palco</label>
        <input class="form-control" type="text" name="palco" id="palco" placeholder="Ingrese el numero de palco">
    </div>

    <hr />
    <div class="text-right">
        <a href="/tickets" class="btn btn-secondary" tabindex="0">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="0">Guardar</button>
    </div>
</form>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/misEstilos.css">
@stop

@section('js')
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@stop
