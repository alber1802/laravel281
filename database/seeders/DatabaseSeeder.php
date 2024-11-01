<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // Insertar Artesano
        // Insertar Repartidores
        // Insertar Clientes

        // Insertar Comunidades

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ComunidadSeeder::class);
        //$this->call(UserTableSeeder::class);
        //$this->call(ComunidadSeeder::class);

 
    }
}
