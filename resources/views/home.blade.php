@extends('adminlte::page')

@section('title', 'Ficha Tecnica')


@section('content_header')
<h1>Inicio</h1>
@stop

@section('content')
<p>Bienvenido al panel de administración.</p>

<div class="row">
	<div class="col-md-3">
		<x-adminlte-small-box title="{{ $cantidadFichasTecnicas }}" text="Registros" icon="fas fa-house-user"
		theme="teal" url="fichastecnicas" url-text="View details"/>
	</div>
	<!-- <div class="col-md-3">
		<x-adminlte-small-box title="424" text="Views" icon="fas fa-eye text-dark"
		theme="teal" url="#" url-text="View details"/>
	</div>
	<div class="col-md-3">
		<x-adminlte-small-box title="424" text="Views" icon="fas fa-eye text-dark"
		theme="teal" url="#" url-text="View details"/>
	</div>
	<div class="col-md-3">
		<x-adminlte-small-box title="424" text="Views" icon="fas fa-eye text-dark"
		theme="teal" url="#" url-text="View details"/>
	</div>	 -->
</div>


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






@if(session('status'))

@endif

@stop