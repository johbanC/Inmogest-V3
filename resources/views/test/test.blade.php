@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Inventarios</h1>
@stop

@section('content')
<p>Inventarios realizados</p>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Default Card Example</h3>
        <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary">Label</span>
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
<script>
    console.log('Hi!');
</script>
@stop