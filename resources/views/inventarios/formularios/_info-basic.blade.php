<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">Informacion basica</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse">
				<i class="fas fa-minus"></i>
			</button>
		</div>

	</div>

	<div class="card-body" style="display: block;">

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
				<x-adminlte-input-date id="tuInputFecha" label="Fecha" name="fecha" :config="$config"
				placeholder="Elige una fecha..." fgroup-class="col-md-3"
				class="{{ $errors->has('fecha') ? 'is-invalid' : '' }}"
				value="{{ old('fecha') }}">
				<x-slot name="appendSlot">
					<div class="input-group-text bg-gradient-danger">
						<i class="fas fa-calendar-alt"></i>
					</div>
				</x-slot>
			</x-adminlte-input-date>

			@if ($errors->has('fecha'))
			<div class="invalid-feedback">{{ $errors->first('fecha') }}</div>
			@endif

			<x-adminlte-input name="direccion" label="Direccion" placeholder="Direccion" fgroup-class="col-md-3"
			class="{{ $errors->has('direccion') ? 'is-invalid' : '' }}" value="{{ old('direccion') }}" />
			@if ($errors->has('direccion'))
			<div class="invalid-feedback">{{ $errors->first('direccion') }}</div>
			@endif

			<x-adminlte-select name="tipo_inmueble" label="Tipo de Inmueble" fgroup-class="col-md-3"
			class="{{ $errors->has('tipo_inmueble') ? 'is-invalid' : '' }}">
			<x-adminlte-options :options="['Casa', 'Apartamento']" 
			empty-option="Seleccione una opción..." />
		</x-adminlte-select>
		@if ($errors->has('tipo_inmueble'))
		<div class="invalid-feedback">{{ $errors->first('tipo_inmueble') }}</div>
		@endif

		<x-adminlte-input name="arrendador" label="Arrendador" placeholder="Arrendador" fgroup-class="col-md-3"
		class="{{ $errors->has('arrendador') ? 'is-invalid' : '' }}" value="{{ old('arrendador') }}" />
		@if ($errors->has('arrendador'))
		<div class="invalid-feedback">{{ $errors->first('arrendador') }}</div>
		@endif
	</div>

	<div class="row">
		<x-adminlte-input name="inquilino" label="Inquilino" placeholder="Inquilino" fgroup-class="col-md-4"
		class="{{ $errors->has('inquilino') ? 'is-invalid' : '' }}" value="{{ old('inquilino') }}" />
		@if ($errors->has('inquilino'))
		<div class="invalid-feedback">{{ $errors->first('inquilino') }}</div>
		@endif

		<x-adminlte-input name="propietario" label="Propietario" placeholder="Propietario"
		fgroup-class="col-md-4" class="{{ $errors->has('propietario') ? 'is-invalid' : '' }}"
		value="{{ old('propietario') }}" />
		@if ($errors->has('propietario'))
		<div class="invalid-feedback">{{ $errors->first('propietario') }} </div>
		@endif

		<x-adminlte-input name="nro_llaves" label="Nro Llaves" placeholder="Nro Llaves" fgroup-class="col-md-4"
		type="number" class="{{ $errors->has('nro_llaves') ? 'is-invalid' : '' }}"
		value="{{ old('nro_llaves') }}" />
		@if ($errors->has('nro_llaves'))
		<div class="invalid-feedback">{{ $errors->first('nro_llaves') }}</div>
		@endif
	</div>

</section>



</div>

</div>