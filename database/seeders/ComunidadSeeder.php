<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ComunidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar comunidades
        DB::table('comunidads')->insert([
            // LA PAZ
            ['nombreCo' => 'Kallawaya', 'ciudad' => 'La Paz', 'ubicacionC' => 'Provincia Bautista Saavedra', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Los Yungas', 'ciudad' => 'La Paz', 'ubicacionC' => 'Nor Yungas', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Uru Chipaya', 'ciudad' => 'La Paz', 'ubicacionC' => 'Lago Titicaca', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Tiwanaku', 'ciudad' => 'La Paz', 'ubicacionC' => 'Tiwanaku, Provincia Ingavi', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Laja', 'ciudad' => 'La Paz', 'ubicacionC' => 'Provincia Los Andes', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Sorata', 'ciudad' => 'La Paz', 'ubicacionC' => 'Provincia Larecaja', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Achacachi', 'ciudad' => 'La Paz', 'ubicacionC' => 'Provincia Omasuyos', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Palca', 'ciudad' => 'La Paz', 'ubicacionC' => 'Provincia Murillo', 'created_at' => now(), 'updated_at' => now()],

            // COCHABAMBA
            ['nombreCo' => 'Quechua', 'ciudad' => 'Cochabamba', 'ubicacionC' => 'Valles Centrales', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Ayopaya', 'ciudad' => 'Cochabamba', 'ubicacionC' => 'Provincia Ayopaya', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Chapare', 'ciudad' => 'Cochabamba', 'ubicacionC' => 'Provincia Chapare', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Valle Alto', 'ciudad' => 'Cochabamba', 'ubicacionC' => 'Región Valle Alto', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Mizque', 'ciudad' => 'Cochabamba', 'ubicacionC' => 'Provincia Mizque', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Sacaba', 'ciudad' => 'Cochabamba', 'ubicacionC' => 'Provincia Chapare', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Independencia', 'ciudad' => 'Cochabamba', 'ubicacionC' => 'Municipio Independencia, Provincia Ayopaya', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Punata', 'ciudad' => 'Cochabamba', 'ubicacionC' => 'Provincia Punata', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Tiraque', 'ciudad' => 'Cochabamba', 'ubicacionC' => 'Provincia Tiraque', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Anzaldo', 'ciudad' => 'Cochabamba', 'ubicacionC' => 'Provincia Esteban Arce', 'created_at' => now(), 'updated_at' => now()],

            // SANTA CRUZ
            ['nombreCo' => 'Guaraní', 'ciudad' => 'Santa Cruz', 'ubicacionC' => 'Provincia Cordillera', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Chiquitana', 'ciudad' => 'Santa Cruz', 'ubicacionC' => 'Chiquitos', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Ayoreo', 'ciudad' => 'Santa Cruz', 'ubicacionC' => 'Región Chiquitanía', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Montereña', 'ciudad' => 'Santa Cruz', 'ubicacionC' => 'Montero, Provincia Obispo Santistevan', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Vallegrande', 'ciudad' => 'Santa Cruz', 'ubicacionC' => 'Provincia Vallegrande', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'San Ignacio', 'ciudad' => 'Santa Cruz', 'ubicacionC' => 'San Ignacio de Velasco, Chiquitanía', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Samaipata', 'ciudad' => 'Santa Cruz', 'ubicacionC' => 'Provincia Florida', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Paurito', 'ciudad' => 'Santa Cruz', 'ubicacionC' => 'Distrito Rural, Santa Cruz de la Sierra', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Okinawa', 'ciudad' => 'Santa Cruz', 'ubicacionC' => 'Municipio Okinawa, Provincia Warnes', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Buena Vista', 'ciudad' => 'Santa Cruz', 'ubicacionC' => 'Provincia Ichilo', 'created_at' => now(), 'updated_at' => now()],

            // BENI
            ['nombreCo' => 'Moxeña', 'ciudad' => 'Beni', 'ubicacionC' => 'Trinidad', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Movima', 'ciudad' => 'Beni', 'ubicacionC' => 'Provincia Yacuma', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Chimán', 'ciudad' => 'Beni', 'ubicacionC' => 'Provincia Ballivián', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Itonama', 'ciudad' => 'Beni', 'ubicacionC' => 'Provincia Iténez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Sirionó', 'ciudad' => 'Beni', 'ubicacionC' => 'Parque Nacional Isiboro Sécure', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Canichana', 'ciudad' => 'Beni', 'ubicacionC' => 'Provincia Moxos', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Yuracaré', 'ciudad' => 'Beni', 'ubicacionC' => 'Riberalta', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Baure', 'ciudad' => 'Beni', 'ubicacionC' => 'Provincia Vaca Díez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Trinitaria', 'ciudad' => 'Beni', 'ubicacionC' => 'San Ignacio de Moxos', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Cavineña', 'ciudad' => 'Beni', 'ubicacionC' => 'Provincia General José Ballivián', 'created_at' => now(), 'updated_at' => now()],
            
            // PANDO
            ['nombreCo' => 'Pacahuara', 'ciudad' => 'Pando', 'ubicacionC' => 'Provincia Federico Román', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Chácobo', 'ciudad' => 'Pando', 'ubicacionC' => 'Provincia Madre de Dios', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Esse Ejja', 'ciudad' => 'Pando', 'ubicacionC' => 'Provincia Manuripi', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Tacana', 'ciudad' => 'Pando', 'ubicacionC' => 'Provincia Nicolás Suárez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Bella Flor', 'ciudad' => 'Pando', 'ubicacionC' => 'Cercanías de Cobija', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Puerto Rico', 'ciudad' => 'Pando', 'ubicacionC' => 'Provincia Manuripi', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Filadelfia', 'ciudad' => 'Pando', 'ubicacionC' => 'Provincia Abuná', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'San Pedro', 'ciudad' => 'Pando', 'ubicacionC' => 'Provincia Nicolás Suárez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Sena', 'ciudad' => 'Pando', 'ubicacionC' => 'Provincia Madre de Dios', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Nueva Esperanza', 'ciudad' => 'Pando', 'ubicacionC' => 'Provincia Federico Román', 'created_at' => now(), 'updated_at' => now()],
            
            // TARIJA
            ['nombreCo' => 'Tomatitas', 'ciudad' => 'Tarija', 'ubicacionC' => 'Cercanías de la ciudad de Tarija', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'San Lorenzo', 'ciudad' => 'Tarija', 'ubicacionC' => 'Provincia Méndez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'El Puente', 'ciudad' => 'Tarija', 'ubicacionC' => 'Provincia El Puente', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Yunchará', 'ciudad' => 'Tarija', 'ubicacionC' => 'Provincia José María Avilés', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Iscayachi', 'ciudad' => 'Tarija', 'ubicacionC' => 'Provincia Méndez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Padcaya', 'ciudad' => 'Tarija', 'ubicacionC' => 'Provincia Arce', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Bermejo', 'ciudad' => 'Tarija', 'ubicacionC' => 'Provincia Aniceto Arce', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Chiquiacá', 'ciudad' => 'Tarija', 'ubicacionC' => 'Municipio El Puente', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Entre Ríos', 'ciudad' => 'Tarija', 'ubicacionC' => 'Provincia O’Connor', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Caraparí', 'ciudad' => 'Tarija', 'ubicacionC' => 'Provincia Gran Chaco', 'created_at' => now(), 'updated_at' => now()],

            // CHUQUISACA
            ['nombreCo' => 'Tarabuco', 'ciudad' => 'Chuquisaca', 'ubicacionC' => 'Provincia Yamparáez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Yamparáez', 'ciudad' => 'Chuquisaca', 'ubicacionC' => 'Cercanías de Sucre', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Zudáñez', 'ciudad' => 'Chuquisaca', 'ubicacionC' => 'Provincia Zudáñez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Mojocoya', 'ciudad' => 'Chuquisaca', 'ubicacionC' => 'Provincia Jaime Zudáñez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Icla', 'ciudad' => 'Chuquisaca', 'ubicacionC' => 'Provincia Zudáñez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Presto', 'ciudad' => 'Chuquisaca', 'ubicacionC' => 'Provincia Zudáñez', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Villa Serrano', 'ciudad' => 'Chuquisaca', 'ubicacionC' => 'Provincia Belisario Boeto', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Padilla', 'ciudad' => 'Chuquisaca', 'ubicacionC' => 'Provincia Tomina', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Muyupampa', 'ciudad' => 'Chuquisaca', 'ubicacionC' => 'Provincia Luis Calvo', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Monteagudo', 'ciudad' => 'Chuquisaca', 'ubicacionC' => 'Provincia Hernando Siles', 'created_at' => now(), 'updated_at' => now()],
            
            // ORURO
            ['nombreCo' => 'Challapata', 'ciudad' => 'Oruro', 'ubicacionC' => 'Provincia Abaroa', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Huanuni', 'ciudad' => 'Oruro', 'ubicacionC' => 'Provincia Pantaleón Dalence', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Poopó', 'ciudad' => 'Oruro', 'ubicacionC' => 'Provincia Poopó', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Caracollo', 'ciudad' => 'Oruro', 'ubicacionC' => 'Provincia Cercado', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Machacamarca', 'ciudad' => 'Oruro', 'ubicacionC' => 'Provincia Pantaleón Dalence', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Orinoca', 'ciudad' => 'Oruro', 'ubicacionC' => 'Provincia Sur Carangas', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Sabaya', 'ciudad' => 'Oruro', 'ubicacionC' => 'Provincia Sabaya', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Huari', 'ciudad' => 'Oruro', 'ubicacionC' => 'Provincia Sebastián Pagador', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Curahuara de Carangas', 'ciudad' => 'Oruro', 'ubicacionC' => 'Provincia Sajama', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Salinas de Garci Mendoza', 'ciudad' => 'Oruro', 'ubicacionC' => 'Provincia Ladislao Cabrera', 'created_at' => now(), 'updated_at' => now()],
            
            // POTOSI
            ['nombreCo' => 'Uyuni', 'ciudad' => 'Potosí', 'ubicacionC' => 'Provincia Gran Potosí', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Betanzos', 'ciudad' => 'Potosí', 'ubicacionC' => 'Provincia Cornelio Saavedra', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Tupiza', 'ciudad' => 'Potosí', 'ubicacionC' => 'Provincia Tumusla', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Cotagaita', 'ciudad' => 'Potosí', 'ubicacionC' => 'Provincia Cotagaita', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Villazón', 'ciudad' => 'Potosí', 'ubicacionC' => 'Provincia Modesto Omiste', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'San Pedro de Quemes', 'ciudad' => 'Potosí', 'ubicacionC' => 'Provincia Nor Chichas', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Atocha', 'ciudad' => 'Potosí', 'ubicacionC' => 'Provincia Atocha', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'San Antonio', 'ciudad' => 'Potosí', 'ubicacionC' => 'Provincia Chayanta', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCo' => 'Sacaca', 'ciudad' => 'Potosí', 'ubicacionC' => 'Provincia Sacaca', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}