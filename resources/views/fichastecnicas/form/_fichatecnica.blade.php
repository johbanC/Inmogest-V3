

<section>

	@csrf

	{{-- Placeholder, date only and append icon --}}
	@php
	$config = [
	'format' => 'L',
	'locale' => 'es', // Establecer el idioma a español
	'timeZone' => 'America/Bogota',
	];
	@endphp

	<div class="row">

		<x-adminlte-input name="nom_propietario" label="Nombre del Propietario" placeholder="Nombre del Propietario" fgroup-class="col-md-4"
		class="{{ $errors->has('nom_propietario') ? 'is-invalid' : '' }}" value="{{ old('nom_propietario') }}" />
		@if ($errors->has('nom_propietario'))
		<div class="invalid-feedback">{{ $errors->first('nom_propietario') }}</div>
		@endif

		<x-adminlte-input name="cedula" label="Cedula" placeholder="Cedula" fgroup-class="col-md-4"
		type="number" class="{{ $errors->has('cedula') ? 'is-invalid' : '' }}" value="{{ old('cedula') }}" />
		@if ($errors->has('cedula'))
		<div class="invalid-feedback">{{ $errors->first('cedula') }}</div>
		@endif

		<x-adminlte-input name="telefono" label="Telefono" placeholder="Telefono" fgroup-class="col-md-4"
		type="number" class="{{ $errors->has('telefono') ? 'is-invalid' : '' }}" value="{{ old('telefono') }}" />
		@if ($errors->has('telefono'))
		<div class="invalid-feedback">{{ $errors->first('telefono') }}</div>
		@endif

		<x-adminlte-input name="barrio" label="Barrio" placeholder="Barrio" fgroup-class="col-md-6"
		class="{{ $errors->has('barrio') ? 'is-invalid' : '' }}" value="{{ old('barrio') }}" />
		@if ($errors->has('barrio'))
		<div class="invalid-feedback">{{ $errors->first('barrio') }}</div>
		@endif

		<x-adminlte-input name="direccion" label="Direccion" placeholder="Direccion" fgroup-class="col-md-6"
		class="{{ $errors->has('direccion') ? 'is-invalid' : '' }}" value="{{ old('direccion') }}" />
		@if ($errors->has('direccion'))
		<div class="invalid-feedback">{{ $errors->first('direccion') }}</div>
		@endif

		

		<x-adminlte-input name="valor" label="Valor" placeholder="Valor" fgroup-class="col-md-6"
		class="{{ $errors->has('valor') ? 'is-invalid' : '' }}" value="{{ old('valor') }}" />
		@if ($errors->has('valor'))
		<div class="invalid-feedback">{{ $errors->first('valor') }}</div>
		@endif

		<x-adminlte-input name="administracion" label="Administracion" placeholder="Administracion" fgroup-class="col-md-6"
		class="{{ $errors->has('administracion') ? 'is-invalid' : '' }}" value="{{ old('administracion') }}" />
		@if ($errors->has('administracion'))
		<div class="invalid-feedback">{{ $errors->first('valor') }}</div>
		@endif




		<x-adminlte-select name="tipo_inmueble" label="Tipo de Inmueble" fgroup-class="col-md-6"
		class="{{ $errors->has('tipo_inmueble') ? 'is-invalid' : '' }}">
		<x-adminlte-options :options="['Casa', 'Apartamento', 'Local', 'Bodega', 'Finca', 'Otro']" 
		empty-option="Seleccione una opción..." />
	</x-adminlte-select>
	@if ($errors->has('tipo_inmueble'))
	<div class="invalid-feedback">{{ $errors->first('tipo_inmueble') }}</div>
	@endif

	<x-adminlte-select name="tipo_transaccion" label="Tipo de Transacción" fgroup-class="col-md-6"
	class="{{ $errors->has('tipo_transaccion') ? 'is-invalid' : '' }}">
	<x-adminlte-options :options="['Venta', 'Arriendo']" 
	empty-option="Seleccione una opción..." />
</x-adminlte-select>
@if ($errors->has('tipo_transaccion'))
<div class="invalid-feedback">{{ $errors->first('tipo_transaccion') }}</div>
@endif

</div>

<div class="row">

	<x-adminlte-input name="alcobas" label="Alcobas" placeholder="Alcobas" fgroup-class="col-md-3"
	type="number" class="{{ $errors->has('alcobas') ? 'is-invalid' : '' }}" value="{{ old('alcobas') }}" />
	@if ($errors->has('alcobas'))
	<div class="invalid-feedback">{{ $errors->first('alcobas') }}</div>
	@endif

	<x-adminlte-input name="closet" label="Closet" placeholder="Closet" fgroup-class="col-md-2"
	type="number" class="{{ $errors->has('closet') ? 'is-invalid' : '' }}" value="{{ old('closet') }}" />
	@if ($errors->has('closet'))
	<div class="invalid-feedback">{{ $errors->first('closet') }}</div>
	@endif

	<x-adminlte-input name="baño" label="Baño" placeholder="Baño" fgroup-class="col-md-2"
	type="number" class="{{ $errors->has('baño') ? 'is-invalid' : '' }}" value="{{ old('baño') }}" />
	@if ($errors->has('baño'))
	<div class="invalid-feedback">{{ $errors->first('baño') }}</div>
	@endif

	<x-adminlte-input name="estrato" label="Estrato" placeholder="Estrato" fgroup-class="col-md-2"
	type="number" class="{{ $errors->has('estrato') ? 'is-invalid' : '' }}" value="{{ old('estrato') }}" />
	@if ($errors->has('estrato'))
	<div class="invalid-feedback">{{ $errors->first('estrato') }}</div>
	@endif

	<x-adminlte-input name="area" label="Area" placeholder="Area" fgroup-class="col-md-3"
	type="number" class="{{ $errors->has('area') ? 'is-invalid' : '' }}" value="{{ old('area') }}" />
	@if ($errors->has('area'))
	<div class="invalid-feedback">{{ $errors->first('area') }}</div>
	@endif

</div>

<div class="row">
	
	<x-adminlte-input name="piso" label="Piso" placeholder="Piso" fgroup-class="col-md-6"
	class="{{ $errors->has('piso') ? 'is-invalid' : '' }}" value="{{ old('piso') }}" />
	@if ($errors->has('piso'))
	<div class="invalid-feedback">{{ $errors->first('valor') }}</div>
	@endif

	
	<x-adminlte-select name="calentador" label="Calentador" fgroup-class="col-md-6"
	class="{{ $errors->has('calentador') ? 'is-invalid' : '' }}">
	<x-adminlte-options :options="['Gas', 'Electrico']" 
	empty-option="Seleccione una opción..." />
</x-adminlte-select>
@if ($errors->has('calentador'))
<div class="invalid-feedback">{{ $errors->first('calentador') }}</div>
@endif


</div>

<div class="row">

    <x-adminlte-input-switch name="vestier" label="Vestier" data-on-text="Si" data-off-text="No" data-on-color="teal" fgroup-class="col-md-3"
        class="{{ $errors->has('vestier') ? 'is-invalid' : '' }}"/>
    @if ($errors->has('vestier'))
        <div class="invalid-feedback">{{ $errors->first('vestier') }}</div>
    @endif

    <x-adminlte-input-switch name="cocina" label="Cocina" data-on-text="Si" data-off-text="No" data-on-color="teal" fgroup-class="col-md-3"
        class="{{ $errors->has('cocina') ? 'is-invalid' : '' }}"/>
    @if ($errors->has('cocina'))
        <div class="invalid-feedback">{{ $errors->first('cocina') }}</div>
    @endif

    <x-adminlte-input-switch name="balcon" label="Balcon" data-on-text="Si" data-off-text="No" data-on-color="teal" fgroup-class="col-md-3"
        class="{{ $errors->has('balcon') ? 'is-invalid' : '' }}"/>
    @if ($errors->has('balcon'))
        <div class="invalid-feedback">{{ $errors->first('balcon') }}</div>
    @endif

    <x-adminlte-input-switch name="sala_comedor" label="Sala Comedor" data-on-text="Si" data-off-text="No" data-on-color="teal" fgroup-class="col-md-3"
        class="{{ $errors->has('sala_comedor') ? 'is-invalid' : '' }}"/>
    @if ($errors->has('sala_comedor'))
        <div class="invalid-feedback">{{ $errors->first('sala_comedor') }}</div>
    @endif

</div>

<hr style="border: 2px solid;">



<div class="row">
	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="vestier">
				Vestier
			</label>

			<input type="checkbox" name="vestier" id="vestier" {{ old('vestier') ? 'checked' : '' }}>
			@if ($errors->has('vestier'))
			<div class="invalid-feedback">{{ $errors->first('vestier') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="cocina">
				Cocina
			</label>

			<input type="checkbox" name="cocina" id="cocina" {{ old('cocina') ? 'checked' : '' }}>
			@if ($errors->has('cocina'))
			<div class="invalid-feedback">{{ $errors->first('cocina') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="balcon">
				Balcon
			</label>

			<input type="checkbox" name="balcon" id="balcon" {{ old('balcon') ? 'checked' : '' }}>
			@if ($errors->has('balcon'))
			<div class="invalid-feedback">{{ $errors->first('balcon') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="sala_comedor">
				Sala Comedor
			</label>

			<input type="checkbox" name="sala_comedor" id="sala_comedor" {{ old('sala_comedor') ? 'checked' : '' }}>
			@if ($errors->has('sala_comedor'))
			<div class="invalid-feedback">{{ $errors->first('sala_comedor') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="patio">
				Patio
			</label>

			<input type="checkbox" name="patio" id="patio" {{ old('patio') ? 'checked' : '' }}>
			@if ($errors->has('patio'))
			<div class="invalid-feedback">{{ $errors->first('patio') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="zona_ropa">
				Zona de Ropas
			</label>

			<input type="checkbox" name="zona_ropa" id="zona_ropa" {{ old('zona_ropa') ? 'checked' : '' }}>
			@if ($errors->has('zona_ropa'))
			<div class="invalid-feedback">{{ $errors->first('zona_ropa') }}</div>
			@endif
		</div>
	</div>

</div>



<div class="row">

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="estudio_estar">
				Estudio / Estar
			</label>

			<input type="checkbox" name="estudio_estar" id="estudio_estar" {{ old('estudio_estar') ? 'checked' : '' }}>
			@if ($errors->has('estudio_estar'))
			<div class="invalid-feedback">{{ $errors->first('estudio_estar') }}</div>
			@endif
		</div>
	</div>

	

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="red_gas">
				Red por Gas
			</label>

			<input type="checkbox" name="red_gas" id="red_gas" {{ old('red_gas') ? 'checked' : '' }}>
			@if ($errors->has('red_gas'))
			<div class="invalid-feedback">{{ $errors->first('red_gas') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="cuarto_util">
				Cuarto Util
			</label>

			<input type="checkbox" name="cuarto_util" id="cuarto_util" {{ old('cuarto_util') ? 'checked' : '' }}>
			@if ($errors->has('cuarto_util'))
			<div class="invalid-feedback">{{ $errors->first('cuarto_util') }}</div>
			@endif
		</div>
	</div>

	

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="ascensor">
				Ascensor
			</label>

			<input type="checkbox" name="ascensor" id="ascensor" {{ old('ascensor') ? 'checked' : '' }}>
			@if ($errors->has('ascensor'))
			<div class="invalid-feedback">{{ $errors->first('ascensor') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="parqueadero">
				Parqueadero
			</label>

			<input type="checkbox" name="parqueadero" id="parqueadero" {{ old('parqueadero') ? 'checked' : '' }}>
			@if ($errors->has('parqueadero'))
			<div class="invalid-feedback">{{ $errors->first('parqueadero') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="parqueadero_visitantes">
				Parqueadero Visitantes
			</label>

			<input type="checkbox" name="parqueadero_visitantes" id="parqueadero_visitantes" {{ old('parqueadero_visitantes') ? 'checked' : '' }}>
			@if ($errors->has('parqueadero_visitantes'))
			<div class="invalid-feedback">{{ $errors->first('parqueadero_visitantes') }}</div>
			@endif
		</div>
	</div>

</div>


<div class="row">

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="estudio_estar">
				Estudio / Estar
			</label>

			<input type="checkbox" name="estudio_estar" id="estudio_estar" {{ old('estudio_estar') ? 'checked' : '' }}>
			@if ($errors->has('estudio_estar'))
			<div class="invalid-feedback">{{ $errors->first('estudio_estar') }}</div>
			@endif
		</div>
	</div>

	

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="red_gas">
				Red por Gas
			</label>

			<input type="checkbox" name="red_gas" id="red_gas" {{ old('red_gas') ? 'checked' : '' }}>
			@if ($errors->has('red_gas'))
			<div class="invalid-feedback">{{ $errors->first('red_gas') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="cuarto_util">
				Cuarto Util
			</label>

			<input type="checkbox" name="cuarto_util" id="cuarto_util" {{ old('cuarto_util') ? 'checked' : '' }}>
			@if ($errors->has('cuarto_util'))
			<div class="invalid-feedback">{{ $errors->first('cuarto_util') }}</div>
			@endif
		</div>
	</div>

	

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="alcoba_servicio">
				Alcoba de servicio
			</label>

			<input type="checkbox" name="alcoba_servicio" id="alcoba_servicio" {{ old('alcoba_servicio') ? 'checked' : '' }}>
			@if ($errors->has('alcoba_servicio'))
			<div class="invalid-feedback">{{ $errors->first('alcoba_servicio') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="piscina">
				Piscina
			</label>

			<input type="checkbox" name="piscina" id="piscina" {{ old('piscina') ? 'checked' : '' }}>
			@if ($errors->has('piscina'))
			<div class="invalid-feedback">{{ $errors->first('piscina') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="zonas_verdes">
				Zonas Verdes
			</label>

			<input type="checkbox" name="zonas_verdes" id="zonas_verdes" {{ old('zonas_verdes') ? 'checked' : '' }}>
			@if ($errors->has('zonas_verdes'))
			<div class="invalid-feedback">{{ $errors->first('zonas_verdes') }}</div>
			@endif
		</div>
	</div>

</div>

<div class="row">

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="juegos_infantiles">
				Juegos Infantiles
			</label>

			<input type="checkbox" name="juegos_infantiles" id="juegos_infantiles" {{ old('juegos_infantiles') ? 'checked' : '' }}>
			@if ($errors->has('juegos_infantiles'))
			<div class="invalid-feedback">{{ $errors->first('juegos_infantiles') }}</div>
			@endif
		</div>
	</div>

	

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="salon_social">
				Salon Social
			</label>

			<input type="checkbox" name="salon_social" id="salon_social" {{ old('salon_social') ? 'checked' : '' }}>
			@if ($errors->has('salon_social'))
			<div class="invalid-feedback">{{ $errors->first('salon_social') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="propiedad_horizontal">
				Propiedad Horizontal
			</label>

			<input type="checkbox" name="propiedad_horizontal" id="propiedad_horizontal" {{ old('propiedad_horizontal') ? 'checked' : '' }}>
			@if ($errors->has('propiedad_horizontal'))
			<div class="invalid-feedback">{{ $errors->first('propiedad_horizontal') }}</div>
			@endif
		</div>
	</div>

	

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="cotifono">
				Citofono
			</label>

			<input type="checkbox" name="cotifono" id="cotifono" {{ old('cotifono') ? 'checked' : '' }}>
			@if ($errors->has('cotifono'))
			<div class="invalid-feedback">{{ $errors->first('cotifono') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="unidad">
				Unidad
			</label>

			<input type="checkbox" name="unidad" id="unidad" {{ old('unidad') ? 'checked' : '' }}>
			@if ($errors->has('unidad'))
			<div class="invalid-feedback">{{ $errors->first('unidad') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="tipo_porteria">
				Tipo de Porteria
			</label>

			<input type="checkbox" name="tipo_porteria" id="tipo_porteria" {{ old('tipo_porteria') ? 'checked' : '' }}>
			@if ($errors->has('tipo_porteria'))
			<div class="invalid-feedback">{{ $errors->first('tipo_porteria') }}</div>
			@endif
		</div>
	</div>

</div>

<div class="row">
	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="shut_basura">
				Shut Basura
			</label>

			<input type="checkbox" name="shut_basura" id="shut_basura" {{ old('shut_basura') ? 'checked' : '' }}>
			@if ($errors->has('shut_basura'))
			<div class="invalid-feedback">{{ $errors->first('shut_basura') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="jacuzzi">
				Jacuzzi
			</label>

			<input type="checkbox" name="jacuzzi" id="jacuzzi" {{ old('jacuzzi') ? 'checked' : '' }}>
			@if ($errors->has('jacuzzi'))
			<div class="invalid-feedback">{{ $errors->first('jacuzzi') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="gimnasio">
				Gimnasio
			</label>

			<input type="checkbox" name="gimnasio" id="gimnasio" {{ old('gimnasio') ? 'checked' : '' }}>
			@if ($errors->has('gimnasio'))
			<div class="invalid-feedback">{{ $errors->first('gimnasio') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="turco">
				Turco
			</label>

			<input type="checkbox" name="turco" id="turco" {{ old('turco') ? 'checked' : '' }}>
			@if ($errors->has('turco'))
			<div class="invalid-feedback">{{ $errors->first('turco') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="biblioteca">
				Biblioteca
			</label>

			<input type="checkbox" name="biblioteca" id="biblioteca" {{ old('biblioteca') ? 'checked' : '' }}>
			@if ($errors->has('biblioteca'))
			<div class="invalid-feedback">{{ $errors->first('biblioteca') }}</div>
			@endif
		</div>
	</div>

	<div class="col-md-2">
		<div class="icheck-primary">
			<label for="circuito_cerrado">
				Circuito Cerrado
			</label>

			<input type="checkbox" name="circuito_cerrado" id="circuito_cerrado" {{ old('circuito_cerrado') ? 'checked' : '' }}>
			@if ($errors->has('circuito_cerrado'))
			<div class="invalid-feedback">{{ $errors->first('circuito_cerrado') }}</div>
			@endif
		</div>
	</div>

</div>





</section>






