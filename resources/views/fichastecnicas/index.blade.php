@php

$heads = [
'Nro',
'Nombre propietario',
'Nombre Propiedad',
'Asesor',
['label' => 'Acciones', 'no-export' => true, 'width' => 10],
];


$rows = [];
$fichatecnica = null; // Inicializar la variable fuera del bucle

foreach($fichastecnicas as $index => $fichatecnica) {
    $btnEdit = '<a href="' . route('fichastecnicas.edit', $fichatecnica) . '">
        <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
            <i class="fa fa-lg fa-fw fa-pen"></i>
        </button>
    </a>';

    $btnDelete = '
    <form action="' . route('fichastecnicas.destroy', $fichatecnica) .'" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="' . csrf_token() . '">
        <button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
            <i class="fa fa-lg fa-fw fa-trash"></i>
        </button>
    </form>';

    $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
        <i class="fa fa-lg fa-fw fa-eye"></i>
    </button>';





    $rowData = [
    $index + 1,
    $fichatecnica->nom_propietario,
    $fichatecnica->nom_propiedad,
    $fichatecnica->user->name,
    '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>',
    ];
    $rows[] = $rowData;
}

$config = [
'data' => $rows,
'order' => [[1, 'asc']],
'columns' => [null, null, null, null, ['orderable' => false]],
];

@endphp




@extends('adminlte::page')

@section('title', 'Ficha Tecnica')

@section('content_header')
<h1>Fichas Tecnica</h1>
@stop

@section('content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Fichas Tecnicas</h3>
		<div class="card-tools">
			<!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example 
            	<span class="badge badge-primary">Label</span>-->


            	<a href="{{ route('fichastecnicas.new') }}">
            		<x-adminlte-button label="Crear Nuevo" theme="primary" icon="fas fa-key" />
            	</a>



            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">


        	{{-- With buttons --}}
        	<x-adminlte-datatable id="table5" :heads="$heads" head-theme="light" theme="light" :config="$config" striped hoverable with-buttons/>



        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            The footer of the card
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->



    @stop



    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop



    @section('js')

    @if(session('status'))
    <script>
       toastr.{{session('status')['type']}}("{{ session('status')['message'] }}", "{{ session('status')['title'] }}");
   </script>
   @endif








   @stop