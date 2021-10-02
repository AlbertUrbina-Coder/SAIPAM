@extends('adminlte::page')

@section('title', 'Ciudades')

@section('content_header')

@stop

@section('content')
<div class="container">
    <h1 class="page-header">Editar Ciudad</h1>

    <ol class="breadcrumb">
      <li><a href="/ciudades">Ciudades</a></li>
      <li class="active">{{$ciudad['nombreCiudad']}}</li>
    </ol>

<form action="/ciudades/{{$ciudad['id']}}" method="post" autocomplete="off">
    @csrf
    @method('PUT')

    <input type="hidden" name="idCiudad" value="{{$ciudad['id']}}" />

    <div class="form-group">
        <div class="form-group">
	        <label>Pais</label>
	        <input class="form-control" type="text" name="pais" value="{{$country['nombre']}}" required="">
	    </div>
    </div>

    <div class="form-group">
        <div class="form-group">
	        <label>Nombre</label>
	        <input class="form-control" type="text" name="nombre" value="{{$ciudad['nombreCiudad']}}" required="">
	    </div>
    </div>
	    <hr />
	    <div class="text-right">
            <a href="/ciudades" class="btn btn-secondary">Cancelar</a>
        	<button type="submit" class="btn btn-success">Guardar</button>
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
