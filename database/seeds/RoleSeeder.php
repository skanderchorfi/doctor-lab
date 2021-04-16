<?php

use App\Models\Role;
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
        Role::create([
            'name' => 'admin',
            'description' => 'Administrateur du site'
        ]);

        Role::create([
            'name' => 'medecin',
            'description' => 'Medecin Chercheur'
        ]);
    }
}
