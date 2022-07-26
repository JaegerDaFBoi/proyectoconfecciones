<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = [
            ["departamento" => "Amazonas"],
            ["departamento" => "Antioquia"],
            ["departamento" => "Arauca"],
            ["departamento" => "Atlántico"],
            ["departamento" => "Bogotá D.C"],
            ["departamento" => "Bolívar"],
            ["departamento" => "Boyacá"],
            ["departamento" => "Caldas"],
            ["departamento" => "Caquetá"],
            ["departamento" => "Casanare"],
            ["departamento" => "Cauca"],
            ["departamento" => "Cesar"],
            ["departamento" => "Chocó"],
            ["departamento" => "Córdoba"],
            ["departamento" => "Cundinamarca"],
            ["departamento" => "Guainía"],
            ["departamento" => "Guaviare"],
            ["departamento" => "Huila"],
            ["departamento" => "La Guajira"],
            ["departamento" => "Magdalena"],
            ["departamento" => "Meta"],
            ["departamento" => "Nariño"],
            ["departamento" => "Norte de Santander"],
            ["departamento" => "Putumayo"],
            ["departamento" => "Quindío"],
            ["departamento" => "Risaralda"],
            ["departamento" => "San Andrés y Providencia"],
            ["departamento" => "Santander"],
            ["departamento" => "Sucre"],
            ["departamento" => "Tolima"],
            ["departamento" => "Valle del Cauca"],
            ["departamento" => "Vaupés"],
            ["departamento" => "Vichada"]
        ];

        foreach ($departamentos as $departamento)
        {
            Departamento::create([
                'departamento' => $departamento['departamento']
            ]);
        }
    }
}
