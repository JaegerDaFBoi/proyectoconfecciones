<div>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalCiudad">
        <span class="btn-label">
            <i class="nc-icon nc-simple-add"></i>
        </span>
        Añadir Ciudad
    </button>

    <div class="modal" id="modalCiudad" tabindex="1" role="dialog" aria-labelledby="ciudadModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="ciudadModalLabel">Añadir Ciudad</h5>
                </div>
                
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="departamentoSeleccionado">Departamento</label>
                                @foreach ($departamentoSeleccionado as $item)
                                    <input type="text" class="form-control" id="departamentoSeleccionado"
                                        name="departamentoSeleccionado" value="{{ $item->departamento }}" wire:key='item-{{ $item->id_departamento }}' readonly>
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="nombreCiudad">Nombre de Ciudad</label>
                                <input type="text" class="form-control" id="nombreCiudad" name="nombreCiudad" wire:model.defer="ciudad">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" wire:click="saveCiudad">
                            <span class="btn-label">
                                <i class="nc-icon nc-cloud-upload-94"></i>
                            </span>
                            Guardar
                        </button>
                    </div>
                
            </div>
        </div>
    </div>
</div>
