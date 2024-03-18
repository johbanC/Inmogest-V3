@extends('adminlte::page')

@section('title', 'Nuevo tipo de Transacciones')

@section('content_header')
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.1.0/imask.min.js"></script>

@stop

@section('content')

{{-- @dump($errors->all()) --}}
<br>

<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">Tipo de Transacciones</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse">
				<i class="fas fa-minus"></i>
			</button>
		</div>

	</div>

	<div class="card-body" style="display: block;">
        <form id="formularioTipoTransaccion" method="POST" action="{{ route('tipostransaccions.store') }}" >
            @csrf


            @include('tipostransaccions.form._tipotransaccion')

            <div style="text-align: center;">
                <x-adminlte-button id="botonGuardar" class="btn-flat" type="submit" label="Guardar" theme="success" icon="fas fa-lg fa-save" style="width: 20%; border-radius: 10px;" />
                <x-adminlte-button class="btn-flat" label="Cancelar" theme="danger" icon="fas fa-lg fa-arrow-left" onclick="window.history.back()"  style="width: 20%; border-radius: 10px;" />
            </div>

        </form>

        


    </div>


</div>





<br>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

<style type="text/css">
	tr td .form-group {
		margin-bottom: 0px;
	}
</style>
@stop

@section('js')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var formulario = document.getElementById("formularioTipoTransaccion");
        var botonGuardar = document.getElementById("botonGuardar");
        
        formulario.addEventListener("submit", function() {
            // Deshabilitar el botón después de enviar el formulario
            botonGuardar.disabled = true;
            // Cambiar el texto del botón a "Guardando..."
            botonGuardar.innerHTML = 'Guardando...';
        });
    });
</script>

@stop


<!-- SE AGREGARON LOS FORMULARIOS POR MEDIO DE INCLUES PARA TENER UN MEJOR ORDEN YA QUE SE VAN A REUTILIZAR EN VARIAS SECCIONES -->

