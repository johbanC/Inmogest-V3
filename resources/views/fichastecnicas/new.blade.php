@extends('adminlte::page')

@section('title', 'Nueva Ficha Tecnica')

@section('content_header')
<h1>Nuevo Inventario</h1>
@stop

@section('content')

{{-- @dump($errors->all()) --}}
<form method="POST" action="{{ route('inventarios.store') }}">

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Informacion del Inventario</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>

    </div>

    <div class="card-body" style="display: block;">


        @include('fichastecnicas.form._fichatecnica')






       




</div>

<x-adminlte-button class="btn-flat" type="submit" label="Guardar" theme="success"
icon="fas fa-lg fa-save" />

</div>




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

