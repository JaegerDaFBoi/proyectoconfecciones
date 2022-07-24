<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleadmin = Role::create(['name' => 'Administrador']);
        $rolesup = Role::create(['name' => 'Supervisor']);
        $roleop = Role::create(['name' => 'Operario']);
    }
}
