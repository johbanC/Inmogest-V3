@php

$heads = [
'Nro',
'Nombre porterias',
['label' => 'Acciones', 'no-export' => true, 'width' => 10],
];


$rows = [];
$tipoporteria = null; // Inicializar la variable fuera del bucle


foreach($tipoporterias as $index => $tipoporteria) {


    $btnEdit = '<a href="' . route('tipoporterias.edit', $tipoporteria) . '">
        <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
            <i class="fa fa-lg fa-fw fa-pen"></i>
        </button>
    </a>';

    $btnDelete = '<form id="formDelete" method="POST" action="' . route('tipoporterias.destroy', $tipoporteria) . '" style="display: inline;">
        ' . csrf_field() . '
        ' . method_field('DELETE') . '
        <button type="button" onclick="eliminar()" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
            <i class="fa fa-lg fa-fw fa-trash"></i>
        </button>
    </form>';

    $btnModal = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal' . $tipoporteria->id . '">
        Detalle
    </button>';


    $rowData = [
    $index + 1,
    $tipoporteria->nombre,
    '<nobr>'.$btnEdit.$btnDelete.$btnModal.'</nobr>',    
    ];
    $rows[] = $rowData;
}


$config = [
'data' => $rows,
'order' => [[1, 'desc']],
'columns' => [null, null, ['orderable' => false]],
'language' => ['url' => '//cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json',],
];

@endphp

<!-- llamar a la ventama modal -->
@include('tipoporterias.modal.modal-edit')



@extends('adminlte::page')

<!-- @section('title', 'Ficha Tecnica') -->

@section('content_header')
<!-- <h1>Tipo de inmuebles</h1> -->
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tipo de porterías</h3>
        <div class="card-tools">
            <!-- Botones de acción -->
        </div>
    </div>
    <div class="card-body">
        {{-- Tabla con botones --}}
        <x-adminlte-datatable id="table5" :heads="$heads" head-theme="light" theme="light" :config="$config" striped hoverable with-buttons/>

        <!-- Ventana modal -->
        @foreach($tipoporterias as $tipoporteria)
        <div class="modal fade" id="exampleModal{{$tipoporteria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <!-- Contenido de la ventana modal -->
        </div>
        @endforeach
    </div>
    <div class="card-footer">
        <!-- Pie de la tarjeta -->
    </div>
</div>

@stop


@section('footer')

<strong>Copyright © 2024 <a href="#">InmoGest</a>.</strong>
Todos los derechos reservados.
<div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.0 Beta
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop



@section('js')

<script>
    function eliminar() {
        if (confirm("¿Estás seguro de que deseas eliminar este tipo de porteria?")) {
            document.getElementById("formDelete").submit();
        }
    }
</script>


@if(session('status'))
<script>
 toastr.{{session('status')['type']}}("{{ session('status')['message'] }}", "{{ session('status')['title'] }}");
</script>
@endif
@stop