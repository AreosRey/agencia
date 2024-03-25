<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solicitud;

class SolicitudSeeder extends Seeder
{
    public function run(): void
    {
        Solicitud::create([
            'fecha_solicitud' => '02/03/2024',
            'cliente_id' => '1',
            'servicio_id' =>'1',
            'ubicacion_servicio' => 'Calle canto',
        ]);
    }
}