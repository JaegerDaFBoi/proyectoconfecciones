<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudades';
    protected $primaryKey = 'id_ciudad';

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id', 'id_ciudad');
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'ciudad_id');
    }
}
