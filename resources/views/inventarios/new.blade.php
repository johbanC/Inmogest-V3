@extends('adminlte::page')

@section('title', 'Inventarios')

@section('content_header')
<h1>Nuevo Inventario</h1>
@stop

@section('content')


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Informacion del inventario</h3>
        <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary">Label</span>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Collapsible Card Example</h3>
                <div class="card-tools">
                    <!-- Collapse Button -->
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                        class="fas fa-minus"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <input type="date" name="" id="" class="input-group-text">
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->




        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            The footer of the card
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->



    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informacion Basica</h3>
            <div class="card-tools">
                <!-- Collapse Button -->
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- PARA VERIFICAR LOS ERRORES -->
            @dump($errors->all())

            <form method="POST" action="{{ route('inventarios.store') }}">
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

                @if($errors->has('fecha'))
                <div class="invalid-feedback">{{ $errors->first('fecha') }}</div>
                @endif


                <x-adminlte-input name="direccion" label="Direccion" placeholder="Direccion" fgroup-class="col-md-3"
                class="{{ $errors->has('direccion') ? 'is-invalid' : '' }}" value="{{ old('direccion') }}"/>
                @if($errors->has('direccion'))
                <div class="invalid-feedback">{{ $errors->first('direccion') }}</div>
                @endif

                



                <x-adminlte-select name="tipo_inmueble" label="Tipo de Inmueble" fgroup-class="col-md-3"
                class="{{ $errors->has('tipo_inmueble') ? 'is-invalid' : '' }}">
                <x-adminlte-options :options="['Casa', 'Apartamento']" disabled="0"
                empty-option="Seleccione una opción..." />
            </x-adminlte-select>

            @if($errors->has('tipo_inmueble'))
            <div class="invalid-feedback">{{ $errors->first('tipo_inmueble') }}</div>
            @endif


            <x-adminlte-input name="arrendador" label="Arrendador" placeholder="Arrendador" fgroup-class="col-md-3"
            class="{{ $errors->has('arrendador') ? 'is-invalid' : '' }}" value="{{ old('arrendador') }}"  />
            @if($errors->has('arrendador'))
            <div class="invalid-feedback">{{ $errors->first('arrendador') }}</div>
            @endif
        </div>


        <div class="row">
            <x-adminlte-input name="inquilino" label="Inquilino" placeholder="Inquilino" fgroup-class="col-md-4"
            class="{{ $errors->has('inquilino') ? 'is-invalid' : '' }}" value="{{ old('inquilino') }}"    />
            @if($errors->has('inquilino'))
            <div class="invalid-feedback">{{ $errors->first('inquilino') }}</div>
            @endif

            <x-adminlte-input name="propietario" label="Propietario" placeholder="Propietario"
            fgroup-class="col-md-4" class="{{ $errors->has('propietario') ? 'is-invalid' : '' }}" value="{{ old('propietario') }}"      />
            @if($errors->has('propitario'))
            <div class="invalid-feedback">{{ $errors->first('propietario') }}  </div>
            @endif

            <x-adminlte-input name="nro_llaves" label="Nro Llaves" placeholder="Nro Llaves" fgroup-class="col-md-4" type="number" 
            class="{{ $errors->has('nro_llaves') ? 'is-invalid' ? '' "   />
            @if($errors->has('nro_llaves'))
            <div class="invalid-feedback">{{ $errors->first('nro_llaves') }}</div>
            @endif

        </div>








        <x-adminlte-button class="btn-flat" type="submit" label="Guardar" theme="success"
        icon="fas fa-lg fa-save" />


    </form>


</div>
<!-- /.card-body -->
</div>
<!-- /.card -->


@stop



@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')


@stop