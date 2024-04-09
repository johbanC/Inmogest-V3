@extends('adminlte::page')

@section('title', 'Inventarios')

@section('content_header')
<!-- <h1>Inventarios</h1> -->
@stop

@section('content')
<p>Inventarios realizados</p>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Inventarios</h3>
        <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example 
                <span class="badge badge-primary">Label</span>-->
                

                <a href="{{ route('inventarios.new') }}">
                    <x-adminlte-button label="Crear Nuevo" theme="primary" icon="fas fa-key" />
                </a>



            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            The body of the card
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            The footer of the card
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->

    @stop



    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop



    @section('js')

    

    @if(session('status'))
    <script>
        toastr.{{session('status')['type']}}("{{ session('status')['message'] }}", "{{ session('status')['title'] }}");
    </script>
    @endif








    @stop