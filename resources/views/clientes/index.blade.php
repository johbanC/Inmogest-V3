@php

$heads = [
'Nro',
'Nombre propietario',
'Nombre Propiedad',
'Barrio',
'Valor',
'Asesor',
['label' => 'Acciones', 'no-export' => true, 'width' => 10],
];


$rows = [];
$cliente = null; // Inicializar la variable fuera del bucle

foreach($clientes as $index => $cliente) {
    $btnEdit = '<a href="' . route('clientes.edit', $cliente) . '">
        <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
            <i class="fa fa-lg fa-fw fa-pen"></i>
        </button>
    </a>';

    $btnDelete = '<form id="formDelete" method="POST" action="' . route('clientes.destroy', $cliente) . '" style="display: inline;">
        ' . csrf_field() . '
        ' . method_field('DELETE') . '
        <button type="button" onclick="eliminarCliente()" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
            <i class="fa fa-lg fa-fw fa-trash"></i>
        </button>
    </form>';


    $btnDetails = '<a href="'.route('clientes.pdf', $cliente).'" target="_black">
        <button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
            <i class="fa fa-lg fa-fw fa-file-pdf"></i>
        </button>
    </a>';





    $rowData = [
    $index + 1,
    $cliente->nom_propietario,
    $cliente->nom_propiedad,
    $cliente->barrio,
    number_format($cliente->valor, 2, ',', '.'),
    $cliente->user->name,
    '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>',
    ];
    $rows[] = $rowData;
}

$config = [
'data' => $rows,
'order' => [[1, 'desc']],
'columns' => [null, null, null, null, null, null, ['orderable' => false]],
'language' => ['url' => '//cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json',],
];

@endphp




@extends('adminlte::page')

<!-- @section('title', 'Clientes') -->

@section('content_header')
<!-- <h1>Clientes</h1> -->
@stop

@section('content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Clientes</h3>
		<div class="card-tools">
			<!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example 
            	<span class="badge badge-primary">Label</span>-->


            	<a href="{{ route('clientes.new') }}">
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
        function eliminarCliente() {
            if (confirm("¿Estás seguro de que deseas eliminar el cliente?")) {
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