@extends('adminlte::page')

@section('title', 'Nuevo tipo de inmueble')

@section('content_header')
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.1.0/imask.min.js"></script>

@stop

@section('content')

{{-- @dump($errors->all()) --}}
<br>

<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">Tipo de inmueble</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse">
				<i class="fas fa-minus"></i>
			</button>
		</div>

	</div>

	<div class="card-body" style="display: block;">
        <form id="formularioTipoInmueble" method="POST" action="{{ route('tiposinmuebles.store') }}" >
            @csrf


            @include('tiposinmuebles.form._fichatecnica')

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
        var formulario = document.getElementById("formularioTipoInmueble");
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
    // Crea una instancia de InputMask y aplica la máscara al campo de valor y administración
    var valorInput = document.getElementById('input-valor');
    var administracionInput = document.getElementById('input-administracion');
    
    var valorMask = IMask(valorInput, {
        mask: 'num',
        blocks: {
            num: {
                // Permite hasta 15 dígitos antes del separador decimal
                mask: Number,
                thousandsSeparator: '.',
                radix: ',',
                scale: 2, // Dos dígitos decimales
                signed: false // No se permite un signo de negativo
            }
        },
        lazy: false // Muestra el símbolo de la moneda siempre
    });

    var administracionMask = IMask(administracionInput, {
        mask: 'num',
        blocks: {
            num: {
                // Permite hasta 15 dígitos antes del separador decimal
                mask: Number,
                thousandsSeparator: '.',
                radix: ',',
                scale: 2, // Dos dígitos decimales
                signed: false // No se permite un signo de negativo
            }
        },
        lazy: false // Muestra el símbolo de la moneda siempre
    });
</script>


<script>
	// AGREGAR LOS PUNTOS EN EL NÚMERO DE DOCUMENTO Y PERMITIR SOLO NÚMEROS
	document.getElementById('input-cedula').addEventListener('input', function(evt) {
       var value = evt.target.value;
	    // Eliminar todos los caracteres que no sean números
       value = value.replace(/\D/g, '');
	    // Aplicar el formato con puntos
       evt.target.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
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

