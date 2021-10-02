@extends('adminlte::page')

@section('title', 'Productores')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div>
        <h1 class="page-header">Nuevo Productor</h1>
    </div>

<form action="/productores" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf

    <div class="form-group">
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombreProductor" id="nombreProductor" placeholder="Ingrese su Nombre Completo" required="">
    </div>

    <div class="form-group">
        <label>Tipo de documento</label>
        <select class="form-control" name="tipoDocumento" placeholder="Selecciones el tipo de documento">
            <option>Tarjeta de Identidad</option>
            <option selected>Cédula de Ciudadanía</option>
            <option>Cédula de Extranjería</option>
            <option>Pasaporte</option>
            <option>Documento de Identificación Extanjero</option>
            <option>Permiso Especial de Permanencia PEP</option>
        </select>
    </div>

    <div class="form-group">
        <label>N° Documento</label>
        <input class="form-control" type="text" name="numDocumento" id="numDocumento" placeholder="Ingrese su numero de documento" required="">
    </div>

    <div class="form-group">
        <label>Ciudad</label>
        <select class="form-control" type="text" name="ciudad" id="ciudad" required="">
            <option selected value="110">Bogotá, D.C.</option>
            @foreach($ciudades as $ciudad)
                <option value="{{$ciudad['id']}}">{{ $ciudad['nombreCiudad']}}</option>
            @endforeach
          </select>
    </div>

    <div class="form-group">
        <label>Dirección</label>
        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Ingrese su dirección" required="">
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input class="form-control" type="email" name="correo" id="correo" placeholder="Ingrese su correo electrónico" required="">
    </div>

    <div class="form-group">
        <label>Teléfono</label>
        <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Ingrese su número de telefono" required="">
    </div>

    <div class="form-group">
        <label>Reg. MinCultura</label>
        <input class="form-control" type="text" name="registroMinCultura" id="registroMinCultura" placeholder="Ingrese su registro de MinCultura">
    </div>

    <hr />
    <div class="text-right">
        <a href="/productores" class="btn btn-secondary" tabindex="0">Cancelar</a>
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
@stop
