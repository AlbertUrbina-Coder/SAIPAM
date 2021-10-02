@extends('adminlte::page')

@section('title', 'Tickets')

@section('content_header')

@stop

@section('content')

        <div class="well well-sm text-right">
            <h1 class="page-header" style="float:left; margin:auto; padding:auto;">Lista de Tipo de Tickets segun Evento</h1>
            <a class="btn btn-primary agregar" href='{{url('/tickets/create')}}'>Crear nuevo tipo ticket!</a>
        </div>


        <div >
        <table id="locaciones" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Evento</th>
                    <th>Sector</th>
                    <th>Cliente</th>
                    <th>Fila</th>
                    <th>Silla</th>
                    <th>Palco</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($consulta as $tipo)

                <tr>
                    <td>{{$tipo->titulo}}</td>
                    <td>{{$tipo->sector}}</td>
                    <td>{{$tipo->nombreCliente}}</td>
                    <td>{{$tipo->fila}}</td>
                    <td>{{$tipo->silla}}</td>
                    <td>{{$tipo->palco}}</td>

                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info">Acciones</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="/tickets/{{$tipo->idTicket}}/edit"><i class="fas fa-pencil-alt iconos"></i>&nbsp; Editar</a>

                            <div class="dropdown-divider"></div>
                            <form action="{{route('tickets.destroy', $tipo->idTicket)}}" method="post" class="btn-group">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="dropdown-item"><i class="fas fa-trash-alt iconos"></i>&nbsp; Eliminar</button>
                            </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="../datatablesBT5/Buttons-2.0.1/css/buttons.bootstrap5.min.css"/>
    <link rel="stylesheet" type="text/css" href="../datatablesBT5/dataTables-1.11.2.css">

    <link rel="stylesheet" href="/css/misEstilos.css">
@stop

@section('js')
    <script src="https://kit.fontawesome.com/4de87f4a32.js" crossorigin="anonymous"></script>
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src=" https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>


    <script type="text/javascript" src="../datatablesBT5/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/pdfmake-0.1.36/vfs_fonts.js"></script>
    <!--
    <script type="text/javascript" src="../datatablesBT5/DataTables-1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/DataTables-1.11.3/js/dataTables.bootstrap5.min.js"></script>
    -->
    <script type="text/javascript" src="../datatablesBT5/Buttons-2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/Buttons-2.0.1/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/Buttons-2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="../datatablesBT5/Buttons-2.0.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="../js/descargas.js"></script>
@stop
