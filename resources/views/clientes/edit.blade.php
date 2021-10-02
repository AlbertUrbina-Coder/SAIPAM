@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')

@stop

@section('content')
    <div>
        <h1 class="page-header">Editar Cliente</h1>
    </div>

    <form action="{{route('clientes.update', $cliente->idCliente)}}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{$cliente['idCliente']}}" />

        <div class="form-group">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{$cliente['nombreCliente']}}" required="">
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
            <label>Genero</label>
            <select class="form-control" type="text" name="genero" id="genero" required="">
                <option selected value="">Seleccione:</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
                <option value="Indeterminado">Indeterminado</option>
            </select>
        </div>

        <div class="form-group">
            <label>Fecha de Nacimiento</label>
            <input class="form-control" type="date" name="fechaNacimiento" id="fecha" value="{{$cliente['fechaNacimiento']}}" required="">
        </div>

        <div class="form-group">
            <label>Telefono</label>
            <input class="form-control" type="text" name="telefono" id="telefono" value="{{$cliente['telefono']}}" required="">
        </div>

        <div class="form-group">
            <label>Correo</label>
            <input class="form-control" type="email" name="correo" id="correo" value="{{$cliente['correo']}}" required="">
        </div>

        <hr />
        <div class="text-right">
            <a href="/clientes" class="btn btn-secondary" tabindex="0">Cancelar</a>
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
