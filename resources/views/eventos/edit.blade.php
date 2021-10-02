@extends('adminlte::page')

@section('title', 'Eventos')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div>
        <h1 class="page-header">Editar Evento</h1>
    </div>

<form action="{{route('eventos.update', $evento['idEvento'])}}" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PUT')

    <input type="hidden" name="idEvento" value="{{$evento['idEvento']}}" />

    <div class="form-group">
        <label>Titulo</label>
        <input class="form-control" type="text" name="titulo" id="titulo" value="{{$evento['titulo']}}" required="">
    </div>

    <div class="form-group">
        <label>Descripción</label>
        <input class="form-control" type="text" name="descripcionEvento" id="descripcion" value="{{$evento['descripcionEvento']}}" required="">
    </div>

    <div class="form-group">
        <label>Tipo</label>
        <select class="form-control" name="tipo" value="{{$evento['tipo']}}">
            <option selected>Presencial</option>
            <option>Virtual</option>
            <option>Mixto</option>
        </select>
    </div>

    <div class="form-group">
        <label>Categoria</label>
        <select class="form-control" name="categoria" value="{{$evento['categoria']}}">
            <option selected>Teatro</option>
            <option>Comedia</option>
            <option>Conferencia</option>
            <option>Musica</option>
            <option>Taller</option>
            <option>Circo</option>
            <option>Danza</option>
        </select>
    </div>

    <div class="form-group">
        <label>Productor</label>
        <select class="form-control" type="text" name="productor" id="productor" required="">
            <option selected value="">Seleccione el productor encargado del evento:</option>
            @foreach($productores as $productor)
                <option value="{{$productor['idProductor']}}">{{ $productor['nombreProductor']}}</option>
            @endforeach
          </select>
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
        <label>Locacion</label>
        <select class="form-control" type="text" name="locacion" id="locacion" required="">
            <option selected value="">Seleccion la locación del evento:</option>
            @foreach($locaciones as $locacion)
                <option value="{{$locacion['idLocacion']}}">{{ $locacion['nombreLocacion']}}</option>
            @endforeach
          </select>
    </div>

    <div class="form-group">
        <label>Fecha y Hora</label>
        <input class="form-control" type="datetime-local" name="fecha_hora" id="fecha_hora" value="{{$evento['fecha_hora']}}" required="">
    </div>

    <div class="form-group">
        <label>Costo Total</label>
        <input class="form-control" type="text" name="costo" id="costo" value="{{$evento['costo']}}">
    </div>

    <hr />
    <div class="text-right">
        <a href="/eventos" class="btn btn-secondary" tabindex="0">Cancelar</a>
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
