@extends('adminlte::page')

@section('title', 'Nueva Ficha Tecnica')

@section('content_header')
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.1.0/imask.min.js"></script>

@stop

@section('content')

<!-- @dump($errors->all()) -->
<br>

<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">Ficha Tecnica</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse">
				<i class="fas fa-minus"></i>
			</button>
		</div>

	</div>

	<div class="card-body" style="display: block;">
		<form method="POST" action="{{ route('fichastecnicas.store') }}" >


			@include('fichastecnicas.form._fichatecnica-edit')

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

<!-- 	<script type="text/javascript">
    function maskDinero(input) {
        // Eliminar cualquier caracter que no sea dígito o punto
        input.value = input.value.replace(/[^\d.]/g, '');

        // Separar parte entera de la parte decimal
        var partes = input.value.split('.');
        var parteEntera = partes[0];
        var parteDecimal = partes.length > 1 ? '.' + partes[1] : '';

        // Agregar separadores de miles a la parte entera
        parteEntera = parteEntera.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

        // Reasignar el valor al campo de entrada
        input.value = parteEntera + parteDecimal;
    }

    function enviarFormulario() {
        var inputValor = document.getElementById('inputValor');
        // Convertir el valor a un número de punto flotante
        var valorFloat = parseFloat(inputValor.value.replace(/,/g, ''));

        // Aquí puedes realizar cualquier otra operación necesaria antes de enviar el formulario

        // Envía el formulario
        document.getElementById('miFormulario').submit();
    }
</script> -->

<script>
$(document).ready(function() {
  $("#input-dinero").mask("#,##0.00", {
    reverse: true // Ensures the cursor stays at the end after input
  });
});
</script>

<script>
    // Crea una instancia de InputMask y aplica la máscara al campo de teléfono
	var telefonoInput = document.getElementById('input-telefono');
	var telefonoMask = IMask(telefonoInput, {
		mask: '(000) 000-0000'
	});
</script>
@stop


<!-- SE AGREGARON LOS FORMULARIOS POR MEDIO DE INCLUES PARA TENER UN MEJOR ORDEN YA QUE SE VAN A REUTILIZAR EN VARIAS SECCIONES -->

