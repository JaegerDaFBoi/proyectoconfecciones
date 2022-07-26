<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudades = [
            [ "ciudad" => "Leticia", "departamento_id" => 1,],
            [ "ciudad" => "Medellín", "departamento_id" => 2,],
            [ "ciudad" => "Arauca", "departamento_id" => 3,],
            [ "ciudad" => "Barranquilla", "departamento_id" => 4,],
            [ "ciudad" => "Bogotá", "departamento_id" => 5,],
            [ "ciudad" => "Cartagena", "departamento_id" => 6,],
            [ "ciudad" => "Tunja", "departamento_id" => 7,],
            [ "ciudad" => "Manizales", "departamento_id" => 8,],
            [ "ciudad" => "Florencia", "departamento_id" => 9,],
            [ "ciudad" => "Yopal", "departamento_id" => 10,],
            [ "ciudad" => "Popayán", "departamento_id" => 11,],
            [ "ciudad" => "Valledupar", "departamento_id" => 12,],
            [ "ciudad" => "Quibdó", "departamento_id" => 13,],
            [ "ciudad" => "Montería", "departamento_id" => 14,],
            [ "ciudad" => "Bogotá", "departamento_id" => 15,],
            [ "ciudad" => "Inírida", "departamento_id" => 16,],
            [ "ciudad" => "San José del Guaviare", "departamento_id" => 17,],
            [ "ciudad" => "Neiva", "departamento_id" => 18,],
            [ "ciudad" => "Riohacha", "departamento_id" => 19,],
            [ "ciudad" => "Santa Marta", "departamento_id" => 20,],
            [ "ciudad" => "Villavicencio", "departamento_id" => 21,],
            [ "ciudad" => "Pasto", "departamento_id" => 22,],
            [ "ciudad" => "Cúcuta", "departamento_id" => 23,],
            [ "ciudad" => "Mocoa", "departamento_id" => 24,],
            [ "ciudad" => "Armenia", "departamento_id" => 25,],
            [ "ciudad" => "Pereira", "departamento_id" => 26,],
            [ "ciudad" => "San Andrés", "departamento_id" => 27,],
            [ "ciudad" => "Bucaramanga", "departamento_id" => 28,],
            [ "ciudad" => "Sincelejo", "departamento_id" => 29,],
            [ "ciudad" => "Ibagué", "departamento_id" => 30,],
            [ "ciudad" => "Cali", "departamento_id" => 31,],
            [ "ciudad" => "Mitú", "departamento_id" => 32,],
            [ "ciudad" => "Puerto Carreño", "departamento_id" => 33,],
        ];

        foreach ($ciudades as $ciudad) {
            Ciudad::create([
                'ciudad' => $ciudad['ciudad'],
                'departamento_id' => $ciudad['departamento_id']
            ]);
        }
    }
}
