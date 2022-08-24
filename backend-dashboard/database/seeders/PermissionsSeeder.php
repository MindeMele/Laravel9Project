<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'TvarkytiVartotojus',
       ];

       foreach ($permissions as $permission) {
        Permission::create([
            'name' => $permission
        ]);
       }
    }
}
