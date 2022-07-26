<div class="container-fluid">
    <form wire:submit.prevent='saveCliente'>
    <div class="row">
        <div class="form-group col-md-4">
            <label class="text-dark" for="departamentoSelect">Departamento</label>
            <select id="departamentoSelect" name="departamentoSelect" class="form-control" wire:model="departamentoId">
                <option value="">Seleccione el departamento</option>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id_departamento }}">{{ $departamento->departamento }}</option>
                @endforeach
            </select>
        </div>
        @if (!is_null($departamentoId))
            <div class="form-group col-md-5">
                <label class="text-dark" for="ciudadSelect">Ciudad</label>
                <select id="ciudadSelect" name="ciudadSelect" class="form-control" wire:model.defer="ciudad">
                    <option value="">Seleccione la ciudad</option>
                    @foreach ($ciudades as $ciudad)
                        <option value="{{ $ciudad->id_ciudad }}">{{ $ciudad->ciudad }}</option>
                    @endforeach
                </select>
                <livewire:clientes.ciudad-modal :departamento='$departamentoId' wire:key='$departamentoId->id_departamento'>
            </div>
            
        @endif
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label class="text-dark" for="clienteNit">NIT</label>
            <input type="text" class="form-control" id="clienteNit" name="clienteNit" wire:model="nit">
        </div>
        <div class="form-group col-md-6">
            <label class="text-dark" for="razonSocial">Razon Social</label>
            <input type="text" class="form-control" id="razonSocial" name="razonSocial" wire:model="razonsocial">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label class="text-dark" for="telefonoCliente">Teléfono</label>
            <input type="text" class="form-control" id="telefonoCliente" name="telefonoCliente" wire:model="telefono">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label class="text-dark" for="direccionCliente">Dirección Principal</label>
            <input type="text" class="form-control" id="direccionCliente" name="direccionCliente" wire:model="dirprincipal">
        </div>
        <div class="form-group col-md-6">
            <label class="text-dark" for="direccionAlternativa">Dirección Alternativa (Opcional)</label>
            <input type="text" class="form-control" id="direccionAlternativa" name="direccionAlternativa" wire:model="diralternativa">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-warning">Guardar</button>
        </div>
    </div>
    </form>
</div>
