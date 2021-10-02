@extends('adminlte::page')

@section('title', 'Tickets')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div>
        <h1 class="page-header">Nueva Locación</h1>
    </div>

<form action="/locaciones" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf

    <div class="form-group">
        <label>Tipo de Locación</label>
        <select class="form-control" name="tipoLocacion" placeholder="Selecciones el tipo de documento">
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
        <input class="form-control" type="text" name="nombreLocacion" id="nombreLocacion" placeholder="Ingrese su Nombre Completo" required="">
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
        <label>Capacidad</label>
        <input class="form-control" type="text" name="capacidad" id="capacidad" placeholder="Ingrese su Nombre Completo" required="">
    </div>

    <div class="form-group">
        <label>Dirección</label>
        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Ingrese su dirección" required="">
    </div>

    <div class="form-group">
        <label>Correo de contacto</label>
        <input class="form-control" type="email" name="correo" id="correo" placeholder="Ingrese su correo electrónico" required="">
    </div>

    <div class="form-group">
        <label>Valor Alquiler</label>
        <input class="form-control" type="text" name="valorAlquiler" id="valorAlquiler" placeholder="Ingrese su número de telefono">
    </div>

    <hr />
    <div class="text-right">
        <a href="/locaciones" class="btn btn-secondary" tabindex="0">Cancelar</a>
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
    <script>
/*
            $(document).ready(function(){
                $('#paises').on('change', function(){
                    var idPais = $(this).val();
                    if($.trim(idPais) != '') {
                        $.get('locaciones.create', {countries_id: idPais}, function(ciudades){
                            $('#ciudades').empty();
                            $('#ciudades').append("<option value=''>Seleccione una ciudad</option>");
                            $each(ciudades, function(index, value){
                                $('#ciudades').append("<option value='"+index+"'>"+value+"</option>");
                            });
                        });
                    }
                });
            });
*/
        </script>
@stop
