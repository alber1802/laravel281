<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar categorías
        DB::table('categorias')->insert([
            // Categorías originales
            ['nombreCa' => 'Billeteras', 'descripcionCa' => 'Billeteras de cuero', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Sandalias', 'descripcionCa' => 'Sandalias de cuero', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Sombreros', 'descripcionCa' => 'Sombreros de paja', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Cestos', 'descripcionCa' => 'Cestos de paja', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Alfombras', 'descripcionCa' => 'Alfombras de diversos materiales', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Paneros', 'descripcionCa' => 'Paneros de paja', 'created_at' => now(), 'updated_at' => now()],
        
            // Nuevas categorías
            ['nombreCa' => 'Cerámica', 'descripcionCa' => 'Cerámica pintada a mano de diversas formas', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Tejidos', 'descripcionCa' => 'Tejidos de lana de alpaca y oveja, incluyendo bufandas y mantas', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Joyería', 'descripcionCa' => 'Joyería artesanal con piedras preciosas y metales', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Máscaras', 'descripcionCa' => 'Máscaras tradicionales usadas en festividades y rituales', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Instrumentos Musicales', 'descripcionCa' => 'Instrumentos tradicionales como charangos y zampoñas', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Madera', 'descripcionCa' => 'Artículos de madera tallada, incluyendo muebles y decoraciones', 'created_at' => now(), 'updated_at' => now()],
        ]);        
    }
}
