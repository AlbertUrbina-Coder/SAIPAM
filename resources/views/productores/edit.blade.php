@extends('adminlte::page')

@section('title', 'Productores')

@section('content_header')

@stop

@section('content')
    <div>
        <h1 class="page-header">Editar Productor</h1>
    </div>

    <form action="{{route('productores.update', $productor->idProductor)}}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{$productor['idProductor']}}" />

        <div class="form-group">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombreProductor" id="nombre" value="{{$productor['nombreProductor']}}" required>
        </div>

        <div class="form-group">
            <label>Tipo de documento</label>
            <select class="form-control" name="tipoDocumento" value="{{$productor['tipoDocumento']}}">
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
            <input class="form-control" type="text" name="numDocumento" id="numDocumento" value="{{$productor['numeroDocumento']}}" required>
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
            <label>Dirección</label>
            <input class="form-control" type="text" name="direccion" id="direccion" value="{{$productor['direccion']}}" required>
        </div>

        <div class="form-group">
            <label>Correo</label>
            <input class="form-control" type="email" name="correo" id="correo" value="{{$productor['correo']}}" required>
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input class="form-control" type="text" name="telefono" id="telefono" value="{{$productor['telefono']}}" required>
        </div>

        <div class="form-group">
            <label>Reg. MinCultura</label>
            <input class="form-control" type="text" name="registroMinCultura" id="registroMinCultura" value="{{$productor['registroMinCultura']}}">
        </div>

        <hr />
        <div class="text-right">
            <a href="/productores" class="btn btn-secondary" tabindex="0">Cancelar</a>
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
@stop
