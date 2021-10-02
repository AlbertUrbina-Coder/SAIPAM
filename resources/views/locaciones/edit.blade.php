@extends('adminlte::page')

@section('title', 'Tickets')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div>
        <h1 class="page-header">Editar Locación</h1>
    </div>

<form action="{{route('locaciones.update', $locacion->idLocacion)}}" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PUT')

    <input type="hidden" name="id" value="{{$locacion['idLocacion']}}" />

    <div class="form-group">
        <label>Tipo de Locación</label>
        <select class="form-control" name="tipoLocacion" value="{{$locacion['tipoLocacion']}}">
            <option selected>Teatro</option>
            <option>Teatro-Bar</option>
            <option>Sala de conciertos</option>
            <option>Campo abierto</option>
            <option>Auditorio</option>
            <option>Auditorio de Hotel</option>
            <option>Parque</option>
            <option>Estacionamiento</option>
        </select>
    </div>

    <div class="form-group">
        <label>Nombre Locación</label>
        <input class="form-control" type="text" name="nombreLocacion" id="nombreLocacion" value="{{$locacion['nombreLocacion']}}" required>
    </div>

    <div class="form-group">
        <label>Ciudad</label>
        <select class="form-control" type="text" name="ciudad" id="ciudad" required>
            <option selected value="110">Bogotá, D.C.</option>
            @foreach($ciudades as $ciudad)
                <option value="{{$ciudad['id']}}">{{ $ciudad['nombreCiudad']}}</option>
            @endforeach
          </select>
    </div>

    <div class="form-group">
        <label>Capacidad</label>
        <input class="form-control" type="text" name="capacidad" id="capacidad" value="{{$locacion['capacidad']}}" required>
    </div>

    <div class="form-group">
        <label>Dirección</label>
        <input class="form-control" type="text" name="direccion" id="direccion" value="{{$locacion['direccion']}}" required>
    </div>

    <div class="form-group">
        <label>Correo de contacto</label>
        <input class="form-control" type="email" name="correo" id="correo" value="{{$locacion['correoContacto']}}" required>
    </div>

    <div class="form-group">
        <label>Valor Alquiler</label>
        <input class="form-control" type="text" name="valorAlquiler" id="valorAlquiler" value="{{$locacion['valorAlquiler']}}">
    </div>

    <hr />
    <div class="text-right">
        <a href="/locaciones" class="btn btn-secondary" tabindex="0">Cancelar</a>
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
