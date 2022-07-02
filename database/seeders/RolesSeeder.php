<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name'=> 'Admin']);
        $roleAdmin = Role::create(['name'=> 'Persona']);
        $roleAdmin = Role::create(['name'=> 'Empresa']);
    }
}
