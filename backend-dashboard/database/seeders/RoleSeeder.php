<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $roles = [
           'Administratorius',
           'Buhalteris',
           'Klientas',
           'Darbuotojas',
       ];

       foreach ($roles as $role) {
        Role::create([
            'name' => $role
        ]);
       }
    }
}
