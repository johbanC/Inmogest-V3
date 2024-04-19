@php
$heads = [
'Nro',
'Nombre cocinas',
['label' => 'Acciones', 'no-export' => true, 'width' => 10],
];

$rows = [];
$tipococina = null; // Inicializar la variable fuera del bucle

foreach($tipococinas as $index => $tipococina) {
    $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar" data-toggle="modal" data-target="#modalEditar' . $tipococina->id . '">
        <i class="fa fa-lg fa-fw fa-pen"></i>
    </button>';

    $btnDelete = '<form id="formDelete' . $index . '" method="POST" action="' . route('tipococinas.destroy', $tipococina) . '" style="display: inline;">
        ' . csrf_field() . '
        ' . method_field('DELETE') . '
        <button type="button" onclick="eliminar(' . $index . ')" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
            <i class="fa fa-lg fa-fw fa-trash"></i>
        </button>
    </form>';





    $rowData = [
    $index + 1,
    $tipococina->nombre,
    '<nobr>' . $btnEdit . $btnDelete . '</nobr>',
    @include('tipococinas.modal.modal-edit'),
    ];

    $rows[] = $rowData;


}



$config = [
'data' => $rows,
'order' => [[1, 'desc']],
'columns' => [null, null,  ['orderable' => false]],
'language' => ['url' => '//cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json'],
];


@endphp





@extends('adminlte::page')

<!-- @section('title', 'Ficha Tecnica') -->

@section('content_header')
<!-- <h1>Tipo de inmuebles</h1> -->
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tipo de cocinas</h3>
        <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example 
                <span class="badge badge-primary">Label</span>-->

                <!-- Se quito este boton ya que se creo uno nuevo con el modal
                <a href="{{ route('tipococinas.new') }}">
                    <x-adminlte-button label="Crear Nuevo" theme="primary" icon="fas fa-home" />
                </a> -->

                <x-adminlte-button label="Crear nuevo" theme="primary" data-toggle="modal" data-target="#modalCrearNuevo" class="bg" icon="fas fa-utensils"/>
                @include('tipococinas.modal.modal-nuevo')



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
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var formulario = document.getElementById("formularioTipococina");
            var botonGuardar = document.getElementById("botonGuardar");

            formulario.addEventListener("submit", function() {
            // Deshabilitar el botón después de enviar el formulario
                botonGuardar.disabled = true;
            // Cambiar el texto del botón a "Guardando..."
                botonGuardar.innerHTML = 'Guardando...';
            });
        });
    </script>

    <script>
        function eliminar() {
            if (confirm("¿Estás seguro de que deseas eliminar este tipo de cocina?")) {
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