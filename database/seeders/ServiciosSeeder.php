<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicios;

class ServiciosSeeder extends Seeder
{
    public function run(): void
    {
        Servicios::create([
            'tip_serv' => 'Cuidados' ,
            'descripcion_serv' => 'Cuidado general de niños',
            'precio_serv' => '950',
            'duracion_serv' => '3',
        ]);
    }
}
