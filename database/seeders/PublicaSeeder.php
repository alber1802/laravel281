<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PublicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publicas')->insert([
            ['id_artesano' => 2,
            'id_producto' => 1,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],
    
            ['id_artesano' => 1,
            'id_producto' => 3,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],
    
            ['id_artesano' => 1,
            'id_producto' => 4,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],
    
            ['id_artesano' => 1,
            'id_producto' => 5,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],
    
            ['id_artesano' => 2,
            'id_producto' => 6,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],
    
            ['id_artesano' => 2,
            'id_producto' => 7,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],
    
            ['id_artesano' => 2,
            'id_producto' => 8,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 1,
            'id_producto' => 9,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 1,
            'id_producto' => 10,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 2,
            'id_producto' => 11,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 2,
            'id_producto' => 12,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 1,
            'id_producto' => 13,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 1,
            'id_producto' => 14,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 2,
            'id_producto' => 15,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 2,
            'id_producto' => 16,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 2,
            'id_producto' => 17,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 1,
            'id_producto' => 18,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],
            
            ['id_artesano' => 1,
            'id_producto' => 19,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 1,
            'id_producto' => 20,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 2,
            'id_producto' => 21,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],

            ['id_artesano' => 2,
            'id_producto' => 22,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()]
        ]);
    }
}
