@extends('adminlte::page')

@section('title', 'Inventarios')

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


        @include('inventarios.formularios._info-basic')






       

<!-- SECCION 2 -->
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Material</th>
                            <th>Estado</th>
                            <th>Observaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Puerta</td>
                            <input type="hidden" name="puerta" value="puerta">

                            <td>
                                <x-adminlte-input name="cantidad" placeholder="Cantidad"
                                type="number"
                                class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
                                @if ($errors->has('cantidad'))
                                <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
                                @endif
                            </td>

                            <td>
                                <x-adminlte-input name="material" placeholder="Material" type="text"
                                class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
                                @if ($errors->has('material'))
                                <div class="invalid-feedback">{{ $errors->first('material') }}</div>
                                @endif
                            </td>

                            <td>
                                <x-adminlte-select name="estado"
                                class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
                                <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

                                empty-option="Seleccione una opción..." />
                            </x-adminlte-select>
                        </td>

                        <td>
                            <x-adminlte-input name="observaciones" placeholder="Observaciones"
                            type="text"
                            class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
                            @if ($errors->has('observaciones'))
                            <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
                            @endif
                        </td>
                    </tr>


                    <tr>
                        <td>Chapa</td>
                        <input type="hidden" name="chapa" value="chapa">

                        <td>
                            <x-adminlte-input name="cantidad" placeholder="Cantidad"
                            type="number"
                            class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
                            @if ($errors->has('cantidad'))
                            <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
                            @endif
                        </td>

                        <td>
                            <x-adminlte-input name="material" placeholder="Material" type="text"
                            class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
                            @if ($errors->has('material'))
                            <div class="invalid-feedback">{{ $errors->first('material') }}</div>
                            @endif
                        </td>

                        <td>
                            <x-adminlte-select name="estado"
                            class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
                            <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

                            empty-option="Seleccione una opción..." />
                        </x-adminlte-select>
                    </td>

                    <td>
                        <x-adminlte-input name="observaciones" placeholder="Observaciones"
                        type="text"
                        class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
                        @if ($errors->has('observaciones'))
                        <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
                        @endif
                    </td>
                </tr>


                <tr>
                    <td>Ventana</td>
                    <input type="hidden" name="ventata" value="ventata">

                    <td>
                        <x-adminlte-input name="cantidad" placeholder="Cantidad"
                        type="number"
                        class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
                        @if ($errors->has('cantidad'))
                        <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
                        @endif
                    </td>

                    <td>
                        <x-adminlte-input name="material" placeholder="Material" type="text"
                        class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
                        @if ($errors->has('material'))
                        <div class="invalid-feedback">{{ $errors->first('material') }}</div>
                        @endif
                    </td>

                    <td>
                        <x-adminlte-select name="estado"
                        class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
                        <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

                        empty-option="Seleccione una opción..." />
                    </x-adminlte-select>
                </td>

                <td>
                    <x-adminlte-input name="observaciones" placeholder="Observaciones"
                    type="text"
                    class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
                    @if ($errors->has('observaciones'))
                    <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
                    @endif
                </td>
            </tr>


            <tr>
                <td>Vidrio</td>
                <input type="hidden" name="vidrio" value="vidrio">

                <td>
                    <x-adminlte-input name="cantidad" placeholder="Cantidad"
                    type="number"
                    class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
                    @if ($errors->has('cantidad'))
                    <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
                    @endif
                </td>

                <td>
                    <x-adminlte-input name="material" placeholder="Material" type="text"
                    class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
                    @if ($errors->has('material'))
                    <div class="invalid-feedback">{{ $errors->first('material') }}</div>
                    @endif
                </td>

                <td>
                    <x-adminlte-select name="estado"
                    class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
                    <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

                    empty-option="Seleccione una opción..." />
                </x-adminlte-select>
            </td>

            <td>
                <x-adminlte-input name="observaciones" placeholder="Observaciones"
                type="text"
                class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
                @if ($errors->has('observaciones'))
                <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
                @endif
            </td>
        </tr>


        <tr>
            <td>Persiana</td>
            <input type="hidden" name="persiana" value="persiana">

            <td>
                <x-adminlte-input name="cantidad" placeholder="Cantidad"
                type="number"
                class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
                @if ($errors->has('cantidad'))
                <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
                @endif
            </td>

            <td>
                <x-adminlte-input name="material" placeholder="Material" type="text"
                class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
                @if ($errors->has('material'))
                <div class="invalid-feedback">{{ $errors->first('material') }}</div>
                @endif
            </td>

            <td>
                <x-adminlte-select name="estado"
                class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
                <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

                empty-option="Seleccione una opción..." />
            </x-adminlte-select>
        </td>

        <td>
            <x-adminlte-input name="observaciones" placeholder="Observaciones"
            type="text"
            class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
            @if ($errors->has('observaciones'))
            <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
            @endif
        </td>
    </tr>

    <tr>
        <td>Cortina Vertical</td>
        <input type="hidden" name="cortina_vertical" value="cortina_vertical">

        <td>
            <x-adminlte-input name="cantidad" placeholder="Cantidad"
            type="number"
            class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
            @if ($errors->has('cantidad'))
            <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
            @endif
        </td>

        <td>
            <x-adminlte-input name="material" placeholder="Material" type="text"
            class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
            @if ($errors->has('material'))
            <div class="invalid-feedback">{{ $errors->first('material') }}</div>
            @endif
        </td>

        <td>
            <x-adminlte-select name="estado"
            class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
            <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

            empty-option="Seleccione una opción..." />
        </x-adminlte-select>
    </td>

    <td>
        <x-adminlte-input name="observaciones" placeholder="Observaciones"
        type="text"
        class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
        @if ($errors->has('observaciones'))
        <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
        @endif
    </td>
</tr>


<tr>
    <td>Lampara</td>
    <input type="hidden" name="lampara" value="lampara">

    <td>
        <x-adminlte-input name="cantidad" placeholder="Cantidad"
        type="number"
        class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
        @if ($errors->has('cantidad'))
        <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-input name="material" placeholder="Material" type="text"
        class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
        @if ($errors->has('material'))
        <div class="invalid-feedback">{{ $errors->first('material') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-select name="estado"
        class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
        <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

        empty-option="Seleccione una opción..." />
    </x-adminlte-select>
</td>

<td>
    <x-adminlte-input name="observaciones" placeholder="Observaciones"
    type="text"
    class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
    @if ($errors->has('observaciones'))
    <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
    @endif
</td>
</tr>

<tr>
    <td>Plafones</td>
    <input type="hidden" name="plafones" value="plafones">

    <td>
        <x-adminlte-input name="cantidad" placeholder="Cantidad"
        type="number"
        class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
        @if ($errors->has('cantidad'))
        <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-input name="material" placeholder="Material" type="text"
        class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
        @if ($errors->has('material'))
        <div class="invalid-feedback">{{ $errors->first('material') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-select name="estado"
        class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
        <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

        empty-option="Seleccione una opción..." />
    </x-adminlte-select>
</td>

<td>
    <x-adminlte-input name="observaciones" placeholder="Observaciones"
    type="text"
    class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
    @if ($errors->has('observaciones'))
    <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
    @endif
</td>
</tr>

<tr>
    <td>Tomas Electricos</td>
    <input type="hidden" name="tomas_electricos" value="tomas_electricos">

    <td>
        <x-adminlte-input name="cantidad" placeholder="Cantidad"
        type="number"
        class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
        @if ($errors->has('cantidad'))
        <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-input name="material" placeholder="Material" type="text"
        class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
        @if ($errors->has('material'))
        <div class="invalid-feedback">{{ $errors->first('material') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-select name="estado"
        class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
        <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

        empty-option="Seleccione una opción..." />
    </x-adminlte-select>
</td>

<td>
    <x-adminlte-input name="observaciones" placeholder="Observaciones"
    type="text"
    class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
    @if ($errors->has('observaciones'))
    <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
    @endif
</td>
</tr>

<tr>
    <td>Suiches</td>
    <input type="hidden" name="suiches" value="suiches">

    <td>
        <x-adminlte-input name="cantidad" placeholder="Cantidad"
        type="number"
        class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
        @if ($errors->has('cantidad'))
        <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-input name="material" placeholder="Material" type="text"
        class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
        @if ($errors->has('material'))
        <div class="invalid-feedback">{{ $errors->first('material') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-select name="estado"
        class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
        <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

        empty-option="Seleccione una opción..." />
    </x-adminlte-select>
</td>

<td>
    <x-adminlte-input name="observaciones" placeholder="Observaciones"
    type="text"
    class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
    @if ($errors->has('observaciones'))
    <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
    @endif
</td>
</tr>

<tr>
    <td>Toma Telefono</td>
    <input type="hidden" name="toma_telefono" value="toma_telefono">

    <td>
        <x-adminlte-input name="cantidad" placeholder="Cantidad"
        type="number"
        class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
        @if ($errors->has('cantidad'))
        <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-input name="material" placeholder="Material" type="text"
        class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
        @if ($errors->has('material'))
        <div class="invalid-feedback">{{ $errors->first('material') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-select name="estado"
        class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
        <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

        empty-option="Seleccione una opción..." />
    </x-adminlte-select>
</td>

<td>
    <x-adminlte-input name="observaciones" placeholder="Observaciones"
    type="text"
    class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
    @if ($errors->has('observaciones'))
    <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
    @endif
</td>
</tr>

<tr>
    <td>Toma Parabolica</td>
    <input type="hidden" name="toma_parabolica" value="toma_parabolica">

    <td>
        <x-adminlte-input name="cantidad" placeholder="Cantidad"
        type="number"
        class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
        @if ($errors->has('cantidad'))
        <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-input name="material" placeholder="Material" type="text"
        class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
        @if ($errors->has('material'))
        <div class="invalid-feedback">{{ $errors->first('material') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-select name="estado"
        class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
        <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

        empty-option="Seleccione una opción..." />
    </x-adminlte-select>
</td>

<td>
    <x-adminlte-input name="observaciones" placeholder="Observaciones"
    type="text"
    class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
    @if ($errors->has('observaciones'))
    <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
    @endif
</td>
</tr>

<tr>
    <td>Estanteria</td>
    <input type="hidden" name="estanteria" value="estanteria">

    <td>
        <x-adminlte-input name="cantidad" placeholder="Cantidad"
        type="number"
        class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
        @if ($errors->has('cantidad'))
        <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-input name="material" placeholder="Material" type="text"
        class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
        @if ($errors->has('material'))
        <div class="invalid-feedback">{{ $errors->first('material') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-select name="estado"
        class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
        <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

        empty-option="Seleccione una opción..." />
    </x-adminlte-select>
</td>

<td>
    <x-adminlte-input name="observaciones" placeholder="Observaciones"
    type="text"
    class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
    @if ($errors->has('observaciones'))
    <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
    @endif
</td>
</tr>

<tr>
    <td>Piso</td>
    <input type="hidden" name="piso" value="piso">

    <td>
        <x-adminlte-input name="cantidad" placeholder="Cantidad"
        type="number"
        class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
        @if ($errors->has('cantidad'))
        <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-input name="material" placeholder="Material" type="text"
        class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
        @if ($errors->has('material'))
        <div class="invalid-feedback">{{ $errors->first('material') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-select name="estado"
        class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
        <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

        empty-option="Seleccione una opción..." />
    </x-adminlte-select>
</td>

<td>
    <x-adminlte-input name="observaciones" placeholder="Observaciones"
    type="text"
    class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
    @if ($errors->has('observaciones'))
    <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
    @endif
</td>
</tr>

<tr>
    <td>Zocalo</td>
    <input type="hidden" name="zocalo" value="zocalo">

    <td>
        <x-adminlte-input name="cantidad" placeholder="Cantidad"
        type="number"
        class="{{ $errors->has('cantidad') ? 'is-invalid' : '' }}" />
        @if ($errors->has('cantidad'))
        <div class="invalid-feedback">{{ $errors->first('cantidad') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-input name="material" placeholder="Material" type="text"
        class="{{ $errors->has('material') ? 'is-invalid' : '' }}" />
        @if ($errors->has('material'))
        <div class="invalid-feedback">{{ $errors->first('material') }}</div>
        @endif
    </td>

    <td>
        <x-adminlte-select name="estado"
        class="{{ $errors->has('estado') ? 'is-invalid' : '' }}">
        <x-adminlte-options :options="['Bueno', 'Malo', 'Regular']"

        empty-option="Seleccione una opción..." />
    </x-adminlte-select>
</td>

<td>
    <x-adminlte-input name="observaciones" placeholder="Observaciones"
    type="text"
    class="{{ $errors->has('observaciones') ? 'is-invalid' : '' }}" />
    @if ($errors->has('observaciones'))
    <div class="invalid-feedback">{{ $errors->first('observaciones') }}</div>
    @endif
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>

<!-- SECCION 2 -->


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
