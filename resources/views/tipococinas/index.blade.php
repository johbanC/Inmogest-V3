@extends('adminlte::page')

<!-- CSS de DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

<!-- CSS de Bootstrap (si no lo has hecho ya) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">

<!-- jQuery (si no lo has hecho ya) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- JavaScript de DataTables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"></script>


@section('content_header')
<!-- <h1>Tipo de inmuebles</h1> -->
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tipo de cocinas</h3>
        <div class="card-tools">

            <x-adminlte-button label="Crear nuevo" theme="primary" data-toggle="modal" data-target="#modalCrearNuevo" class="bg" icon="fas fa-utensils"/>
            @include('tipococinas.modal.modal-nuevo')

        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">        

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Nombre cocinas</th>
                    <th>Acciones</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($tipococinas as $index => $tipococina)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $tipococina->nombre }}</td>
                    <td>
                        <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar" data-toggle="modal" data-target="#modalEditar{{ $tipococina->id }}">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </button>
                        <form id="formDelete{{ $tipococina->id }}" method="POST" action="{{ route('tipococinas.destroy', $tipococina->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="eliminar({{ $tipococina->id }})" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button>
                        </form>

                    </td>
                </tr>
                @include('tipococinas.modal.modal-edit')
                @endforeach
            </tbody>
        </table>
    </div>


    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer -->
</div>
<!-- /.card -->

@stop

@section('footer')

<strong>Derechos de autor © 2024 <a href="#">InmoGest</a>.</strong>
Todos los derechos reservados.
<div class="float-right d-none d-sm-inline-block">
    <b>Versión</b> 1.0.0 Beta
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')

<script>
$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
         "language": {
            "url": "//cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json"
        },
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function eliminar(id) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("formDelete" + id).submit();
            }
        });
    }
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

@if(session('status'))
<script>
   toastr.{{session('status')['type']}}("{{ session('status')['message'] }}", "{{ session('status')['title'] }}");
</script>
@endif

@stop
