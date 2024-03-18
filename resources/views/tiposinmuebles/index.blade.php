@php

$heads = [
'Nro',
'Nombre inmueble',
['label' => 'Acciones', 'no-export' => true, 'width' => 10],
];


$rows = [];
$tipoinmueble = null; // Inicializar la variable fuera del bucle

foreach($tiposinmuebles as $index => $tipoinmueble) {
    $btnEdit = '<a href="' . route('tiposinmuebles.edit', $tipoinmueble) . '">
        <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
            <i class="fa fa-lg fa-fw fa-pen"></i>
        </button>
    </a>';

    $btnDelete = '<form id="formDelete" method="POST" action="' . route('tiposinmuebles.destroy', $tipoinmueble) . '" style="display: inline;">
    ' . csrf_field() . '
    ' . method_field('DELETE') . '
    <button type="button" onclick="eliminarFicha()" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
        <i class="fa fa-lg fa-fw fa-trash"></i>
    </button>
</form>';


    $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
        <i class="fa fa-lg fa-fw fa-eye"></i>
    </button>';





    $rowData = [
    $index + 1,
    $tipoinmueble->nombre,
    '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>',
    ];
    $rows[] = $rowData;
}

$config = [
'data' => $rows,
'order' => [[1, 'desc']],
'columns' => [null, null,  ['orderable' => false]],
];

@endphp




@extends('adminlte::page')

<!-- @section('title', 'Ficha Tecnica') -->

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


                <a href="{{ route('tiposinmuebles.new') }}">
                    <x-adminlte-button label="Crear Nuevo" theme="primary" icon="fas fa-home" />
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

    <script>
    function eliminarFicha() {
        if (confirm("¿Estás seguro de que deseas eliminar este tipo de inmueble?")) {
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