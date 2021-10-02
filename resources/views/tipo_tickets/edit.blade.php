@extends('adminlte::page')

@section('title', 'Eventos')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div>
        <h1 class="page-header">Editar Tipo Ticket</h1>
    </div>

<form action="{{route('tipo_tickets.update', $tipoTicket['idTipoTicket'])}}" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PUT')

    <input type="hidden" name="idTipoTicket" value="{{$tipoTicket['idTipoTicket']}}" />

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
        <input class="form-control" type="text" name="sector" id="titulo" value="{{$tipoTicket['sector']}}" required="">
    </div>

    <div class="form-group">
        <label>Descripción</label>
        <input class="form-control" type="text" name="descripcion" id="descripcion" value="{{$tipoTicket['descripcion']}}" required="">
    </div>

    <div class="form-group">
        <label>Subtotal</label>
        <input class="form-control" type="text" name="subtotal" id="subtotal" value="{{$tipoTicket['subtotal']}}">
    </div>

    <div class="form-group">
        <label>IVA</label>
        <input class="form-control" type="text" name="iva" id="iva" value="{{$tipoTicket['iva']}}">
    </div>

    <div class="form-group">
        <label> Valor Total</label>
        <input readonly class="form-control" type="text" name="valorTotal" id="valorTotal" value="{{$tipoTicket['valorTotal']}}">
    </div>

    <div class="form-group">
        <label>Cantidad Total</label>
        <input class="form-control" type="text" name="cantidadTotal" id="cantidadTotal" value="{{$tipoTicket['cantidadTotal']}}">
    </div>

    <div class="form-group">
        <label>Cantidad Vendida</label>
        <input class="form-control" type="text" name="cantidadVendida" id="cantidadVendida" value="{{$tipoTicket['cantidadVendida']}}">
    </div>

    <hr />
    <div class="text-right">
        <a href="/tipo_tickets" class="btn btn-secondary" tabindex="0">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="0">Actualizar</button>
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
