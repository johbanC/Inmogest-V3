@extends('adminlte::page')

@section('title', 'Nueva Ficha Tecnica')

@section('content_header')

@stop

@section('content')

{{-- @dump($errors->all()) --}}
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
			

			@include('fichastecnicas.form._fichatecnica')

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

@stop


<!-- SE AGREGARON LOS FORMULARIOS POR MEDIO DE INCLUES PARA TENER UN MEJOR ORDEN YA QUE SE VAN A REUTILIZAR EN VARIAS SECCIONES -->

