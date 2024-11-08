<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('users')->insert([
            [
                'nombre' => 'Administrado',
                'paterno' => 'Admin',
                'materno' => 'Admin',
                'telefono' => '12345612',
                'direccion' => 'empresa',
                'sexo' => 'M',
                'fecha_nacimiento' => '2002-05-14',
                'url' => '/storage/imagenesPerfil/aeM2uvpkGSJ00dqjQe2xv7eATji73cQStTH2vKm3.jpg',
                'name' => 'admin',
                'email' => 'Administrador@gmail.com',
                'email_verified_at' => '2024-10-30 04:26:24',
                'password' => Hash::make('Administrador12345#'), // Laravel encripta la contraseña
                'remember_token' => null,
                'created_at' => '2024-10-23 22:19:36',
                'updated_at' => '2024-10-30 04:26:24',
                'verification_token' => null,
                'verification_token_expires_at' => null
            ]
        ]);

    /*
        DB::statement("
            INSERT INTO `artesanos` (`id_artesano`, `id_comunidad`, `especialidadA`, `descripcionA`, `calificacionA`, `created_at`, `updated_at`) VALUES
            (1, 1, 'Ropa,decoraciones', 'Activo y muy competitivo', 0, NULL, NULL)
        ");
        
        DB::statement("
            INSERT INTO `clientes` (`id_cliente`, `preferencia`, `created_at`, `updated_at`) VALUES
            (2, 'Ropa', '2024-10-27 03:04:04', '2024-10-27 03:04:04')
        ");

 

        
        DB::statement("
        INSERT INTO `vehiculos` (`modeloV`, `placaV`, `colorV`, `tipoV`, `created_at`, `updated_at`) VALUES
        ( 'NISSAN', 'ABC123', 'BLANCO', 'Auto', '2024-10-27 04:57:14', '2024-10-27 04:57:14')
        ");
        
        DB::statement("
            INSERT INTO `repartidos` (`id_repartidor`, `disponibilidadR`, `calificacionR`, `id_vehiculo`, `created_at`, `updated_at`) VALUES
            (3, 1, 6, 1, '2024-10-27 04:57:14', '2024-10-27 04:57:14')
        ");
        
       
        DB::table('users')->insert([
            [
                'nombre' => 'Mas vendedor',
                'paterno' => 'mamani',
                'materno' => 'quispe',
                'telefono' => '544568545',
                'direccion' => 'Sorata',
                'sexo' => 'M',
                'fecha_nacimiento' => '2002-06-14',
                'url' => '/storage/imagenesPerfil/aeM2uvpkGSJ00dqjQe2xv7eATji73cQStTH2vKm3.jpg',
                'name' => 'farmil',
                'email' => 'Artesano2@gmail.com',
                'email_verified_at' => '2024-10-30 04:26:24',
                'password' => Hash::make('Artesano12345#'), // Laravel encripta la contraseña
                'remember_token' => null,
                'created_at' => '2024-10-23 22:19:36',
                'updated_at' => '2024-10-30 04:26:24',
                'verification_token' => null,
                'verification_token_expires_at' => null
            ]]);

        DB::statement("
            INSERT INTO `artesanos` (`id_artesano`, `id_comunidad`, `especialidadA`, `descripcionA`, `calificacionA`, `created_at`, `updated_at`) VALUES
            (2, 6, 'Ropa,decoraciones', 'Activo y muy competitivo', 0, NULL, NULL)
        ");*/
        





        
    }
}
