<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Puesto;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Puesto::create([
            'id' => ' djhfkvjni',
            'Rol' => 'Niñera', 
        ]);

        Puesto::create([
            'id' => ' 984651',
            'Rol' => 'Cliente', 
        ]);

        Puesto::create([
            'id' => ' e123rfwegt',
            'Rol' => 'Administrador', 
        ]);
    }
}
