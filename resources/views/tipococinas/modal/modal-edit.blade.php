    <x-adminlte-modal id="modalEditar{{ $tipococina->id }}" title="Editar tipo de cocina" size="lg" theme="teal"
        icon="fas fa-bell" v-centered static-backdrop scrollable>

        <form action="{{ route('tipococinas.update', $tipococina) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="" value="{{ $tipococina->id }}">





            <section>
                <div class="row">
                    <x-adminlte-input name="nombre" label="Nombre" placeholder="Nombre" fgroup-class="col-md-4"
                    type="text" class="{{ $errors->has('nombre') ? 'is-invalid' : '' }}" value="{{ old('nombre', isset($tipococina) ? $tipococina->nombre : '') }}" id="input-nombre" autofocus/>
                    @if ($errors->has('nombre'))
                    <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
                    @endif
                </div>
            </section>


            <div style="text-align: center;">

                <x-adminlte-button class="btn-flat" type="submit" label="Actualizar" theme="success" icon="fas fa-lg fa-update" style="width: 20%; border-radius: 10px;" />

                <x-adminlte-button class="btn-flat" label="Cancelar" theme="danger" icon="fas fa-lg fa-arrow-left" onclick="window.history.back()"  style="width: 20%; border-radius: 10px;" />
            </div>

        </form>
    </x-adminlte-modal>