<?php

namespace App\Http\Livewire\Clientes;

use App\Models\Ciudad;
use App\Models\Cliente;
use App\Models\Departamento;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class FormularioCliente extends Component
{

    public $departamentoId;
    public $departamento;
    public $ciudades = [];
    public $ciudad;
    public $nit;
    public $razonsocial;
    public $telefono;
    public $dirprincipal;
    public $diralternativa;

    public function updatedDepartamentoId()
    {
        if ($this->departamentoId != '') {
            $this->ciudades = Ciudad::where('departamento_id', $this->departamentoId)->get();
        } else {
            $this->ciudades = [];
        }
    } 

    public function saveCliente()
    {
        $cliente = new Cliente();
        $cliente->nit = $this->nit;
        $cliente->razon_social = $this->razonsocial;
        $cliente->telefono = $this->telefono;
        $cliente->direccion = $this->dirprincipal;
        $cliente->direccion_2 = $this->diralternativa;
        $cliente->ciudad_id = $this->ciudad;
        $cliente->save();
        return Redirect::route('clientes.index');
    }

    public function render()
    {
        return view('livewire.clientes.formulario-cliente', [
            'departamentos' => Departamento::all()
        ]);
    }
}
