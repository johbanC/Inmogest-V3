    <x-adminlte-modal id="modalCrearNuevo" title="Tipo de Cocina" size="lg" theme="teal"
    icon="fas fa-bell" v-centered static-backdrop scrollable>    
    <form id="formularioTipococina" method="POST" action="{{ route('tipococinas.store') }}" >
        @csrf
        <section>
            <div class="row">
                <x-adminlte-input name="nombre" label="Nombre" placeholder="Nombre" fgroup-class="col-md-12"
                type="text" class="{{ $errors->has('nombre') ? 'is-invalid' : '' }}" value="{{ old('nombre') }}" id="input-nombre" autofocus/>
                @if ($errors->has('nombre'))
                <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
                @endif
            </div>
        </section>
        <div style="text-align: center; padding-top: 50px; padding-bottom: 50px;">
            <x-adminlte-button id="botonGuardar" class="btn-flat" type="submit" label="Guardar" theme="success" icon="fas fa-lg fa-save" style="border-radius: 10px;" />
            <x-adminlte-button class="btn-flat" label="Cancelar" theme="danger" icon="fas fa-lg fa-arrow-left" onclick="window.history.back()"  style="border-radius: 10px;" />
        </div>
    </form>
</x-adminlte-modal>