@extends('adminlte::page')

@section('title', 'Ciudades')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div>
        <h1 class="page-header">Nueva Ciudad</h1>
        <ol class="breadcrumb">
        <li><a href="/ciudades">Ciudades</a></li>
        <li class="active">Nuevo Registro</li>
        </ol>
    </div>

<form action="/ciudades" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf

    <div class="form-group">
        <label>Pais</label>
        <select class="form-control" type="text" name="countries_id" id="countries_id" required="">
            <option selected value="37">Colombia</option>
            @foreach($countries as $country)
                <option value="{{$country['id']}}">{{ $country['nombre']}}</option>
            @endforeach
          </select>
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre de la Ciudad" required="">
    </div>

    <hr />
    <div class="text-right">
        <a href="/ciudades" class="btn btn-secondary" tabindex="0">Cancelar</a>
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
