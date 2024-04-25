@foreach($tipoporterias as $tipoporteria)
<!-- Agrega la ventana modal aquí, fuera del bloque PHP -->
<div class="modal fade" id="exampleModal{{$tipoporteria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('tipoporterias.update', $tipoporteria) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalle de la portería {{$tipoporteria->nombre}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Aquí puedes agregar el contenido de tu modal, como detalles adicionales del registro 
                    <p>ID: {{$tipoporteria->id}}</p>
                    <p>Nombre: {{$tipoporteria->nombre}}</p>-->

                    <section>
                        <div class="row">
                            <x-adminlte-input name="nombre" label="Nombre" placeholder="Nombre" fgroup-class="col-md-4"
                            type="text" class="{{ $errors->has('nombre') ? 'is-invalid' : '' }}" value="{{ old('nombre', isset($tipoporteria) ? $tipoporteria->nombre : '') }}" id="input-nombre" autofocus/>
                            @if ($errors->has('nombre'))
                            <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
                            @endif
                        </div>
                    </section>


                </div>
                <div class="modal-footer">
                    <x-adminlte-button class="btn-flat" type="submit" label="Actualizar" theme="success" icon="fas fa-lg fa-update" style="width: 20%; border-radius: 10px;" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach