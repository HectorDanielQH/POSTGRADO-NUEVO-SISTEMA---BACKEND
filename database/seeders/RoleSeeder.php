<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        $role1=Role::create(['name'=>'administrador']);
        $role2=Role::create(['name'=>'coordinador']);
        $role3=Role::create(['name'=>'estudiante']);

        Permission::create(['name'=>'administrador.control'])->assignRole($role1);
        Permission::create(['name'=>'coordinador.control'])->assignRole($role2);
        Permission::create(['name'=>'estudiante.control'])->assignRole($role3);
    }
}
