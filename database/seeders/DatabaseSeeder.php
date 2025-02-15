<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Puesto;
use App\Models\Solicitud;
use App\Models\Servicios;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        ]);
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory(10)->create([
            'name' => 'Test User',
            'email' =>'text@example.com'
        ]);
        $this->call(PuestoSeeder::class);
        $this->call(ServicioSeeder::class);
        $this->call(SolicitudSeeder::class);
    }
}
