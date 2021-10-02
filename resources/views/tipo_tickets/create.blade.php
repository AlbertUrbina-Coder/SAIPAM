@extends('adminlte::page')

@section('title', 'TipoTickets')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div>
        <h1 class="page-header">Nuevo Tipo de Ticket</h1>
    </div>

<form action="/tipo_tickets" method="post" enctype="multipart/form-data" autocomplete="off">
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
        <label>Sector</label>
        <input class="form-control" type="text" name="sector" id="titulo" placeholder="Ingrese el sector" required="">
    </div>

    <div class="form-group">
        <label>Descripción</label>
        <input class="form-control" type="text" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion" required="">
    </div>

    <div class="form-group">
        <label>Subtotal</label>
        <input class="form-control" type="text" name="subtotal" id="subtotal" placeholder="Ingrese el valor del ticket">
    </div>

    <div class="form-group">
        <label>IVA</label>
        <input class="form-control" type="text" name="iva" id="iva" placeholder="Ingrese el IVA">
    </div>

    <div class="form-group">
        <label> Valor Total</label>
        <input readonly class="form-control" type="text" name="valorTotal" id="valorTotal" placeholder="Valor total del ticket">
    </div>

    <div class="form-group">
        <label>Cantidad Total</label>
        <input class="form-control" type="text" name="cantidadTotal" id="cantidadTotal" placeholder="Ingrese la cantidad total de tickets">
    </div>

    <div class="form-group">
        <label>Cantidad Vendida</label>
        <input class="form-control" type="text" name="cantidadVendida" id="cantidadVendida" placeholder="Ingrese la cantidad vendida">
    </div>

    <hr />
    <div class="text-right">
        <a href="/tipo_tickets" class="btn btn-secondary" tabindex="0">Cancelar</a>
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
