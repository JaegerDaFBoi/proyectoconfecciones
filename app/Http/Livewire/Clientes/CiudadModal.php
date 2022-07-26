<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Ciudad;
use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

use function Ramsey\Uuid\v1;

class CiudadModal extends Component
{

    public $departamentoSeleccionado;
    public $ciudad;

    protected $rules = [
        'ciudad' => 'required|alpha',
        'departamentoSeleccionado' => 'required'
    ];

    public function mount($departamento)
    {
        $this->departamentoSeleccionado = Departamento::where('id_departamento', $departamento)->get();
    }

    public function updatedciudad($ciudad)
    {
        $this->validateOnly($ciudad);
    }

    public function saveCiudad(Request $request)
    {

        $this->validate();
        $departamento = $this->departamentoSeleccionado->first();
        $ciudadGuardada = new Ciudad();
        $ciudadGuardada->ciudad = $this->ciudad;
        $ciudadGuardada->departamento_id = $departamento->id_departamento;
        $ciudadGuardada->save();
        return Redirect::route('clientes.create');
    }

    public function render()
    {
        return view('livewire.clientes.ciudad-modal');
    }
}
