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
        // Insertar categorías
        DB::table('categorias')->insert([
            ['nombreCa' => 'Billeteras', 'descripcionCa' => 'Billeteras de cuero', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Sandalias', 'descripcionCa' => 'Sandalias de cuero', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Sombreros', 'descripcionCa' => 'Sombreros de paja', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Cestos', 'descripcionCa' => 'Cestos de paja', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Alfombras', 'descripcionCa' => 'Alfombras de diversos materiales', 'created_at' => now(), 'updated_at' => now()],
            ['nombreCa' => 'Paneros', 'descripcionCa' => 'Paneros de paja', 'created_at' => now(), 'updated_at' => now()],
        ]);
 
        // Insertar productos
        DB::table('productos')->insert([
            [
                'nombreP' => 'Billetera', 
                'descripcionP' => 'Billetera de cuero',
                 'materialP' => 'Cuero',
                'precioP' => 500.00, 
                'stock' => 10,
                 'colorP' => 'Negro', 
                'tipoP' => 'Accesorio',
                'imgP' => 'imagen/gallery-img-02.jpg',
                'imgP2' => 'imagen/gallery-img-02-alt.jpg',
                'imgP3' => 'imagen/gallery-img-02-alt.jpg', 
                'descuentoP' => 0,
                'metodoP' => 'Online',
                 'costoEnvio' => 0,
                'tiempoEntrega' => 0,
                'devolucionP' => '30 días garantizados',
                'garantiaP' => 12,
                 'certificacionP' => 'ISO 9001',
                  'autP' => 1,
                 'id_categoria' => 1,
                 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombreP' => 'Cartera',
                 'descripcionP' => 'Cartera de cuero',
                  'materialP' => 'Cuero',
                'precioP' => 400.00,
                 'stock' => 15, 'colorP' => 'Marrón',
                  'tipoP' => 'Accesorio',
                'imgP' => 'imagen/gallery-img-04.jpg',
                'imgP2' => 'imagen/gallery-img-02-alt.jpg',
                'imgP3' => 'imagen/gallery-img-02-alt.jpg', 
                'descuentoP' => 0,
                'metodoP' => 'Online',
                 'costoEnvio' => 0,
                'tiempoEntrega' => 0,
                'devolucionP' => '30 días garantizados',
                'garantiaP' => 12,
                 'certificacionP' => 'ISO 9001',
                  'autP' => 1,
        
                 'id_categoria' => 1,
                 
                 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombreP' => 'Sandalias',
                 'descripcionP' => 'Sandalias de cuero',
                  'materialP' => 'Cuero',
                'precioP' => 300.00,
                 'stock' => 20,
                  'colorP' => 'Negro',
                   'tipoP' => 'Calzado',
                'imgP' => 'imagen/gallery-img-06.jpg',
                'imgP2' => 'imagen/gallery-img-02-alt.jpg',
                'imgP3' => 'imagen/gallery-img-02-alt.jpg', 
                'descuentoP' => 0,
                'metodoP' => 'Online',
                 'costoEnvio' => 0,
                'tiempoEntrega' => 0,
                'devolucionP' => '30 días garantizados',
                'garantiaP' => 12,
                 'certificacionP' => 'ISO 9001',
                  'autP' => 1,
                 'id_categoria' => 2,
                 
                 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombreP' => 'Sombrero', 
                'descripcionP' => 'Sombrero de paja',
                 'materialP' => 'Paja',
                'precioP' => 250.00, 
                'stock' => 25, 'colorP' => 'Beige',
                 'tipoP' => 'Accesorio',
                'imgP' => 'imagen/p6.webp',
                'imgP2' => 'imagen/gallery-img-02-alt.jpg',
                'imgP3' => 'imagen/gallery-img-02-alt.jpg',
                 'descuentoP' => 0,
                'metodoP' => 'Online',
                 'costoEnvio' => 0,
                'tiempoEntrega' => 0,
                'devolucionP' => '30 días garantizados',
                'garantiaP' => 12,
                 'certificacionP' => 'ISO 9001',
                  'autP' => 1,
                 'id_categoria' => 3, 
                 
                 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombreP' => 'Cesto',
                 'descripcionP' => 'Cesto de paja',
                  'materialP' => 'Paja',
                'precioP' => 150.00, 
                'stock' => 30, 'colorP' => 'Natural',
                 'tipoP' => 'Almacenamiento',
                'imgP' => 'imagen/p2.jpg', 
                'imgP2' => 'imagen/gallery-img-02-alt.jpg',
                'imgP3' => 'imagen/gallery-img-02-alt.jpg',
                'descuentoP' => 0,
                'metodoP' => 'Online',
                 'costoEnvio' => 0,
                'tiempoEntrega' => 0,
                'devolucionP' => '30 días garantizados',
                'garantiaP' => 12,
                 'certificacionP' => 'ISO 9001',
                  'autP' => 1,
                'id_categoria' => 4, 
                
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombreP' => 'Alfombra',
                 'descripcionP' => 'Alfombra de diversos materiales',
                  'materialP' => 'Diversos',
                'precioP' => 800.00,
                 'stock' => 5,
                  'colorP' => 'Multicolor',
                   'tipoP' => 'Decoración',
                'imgP' => 'imagen/p4.webp', 
                'imgP2' => 'imagen/gallery-img-02-alt.jpg',
                'imgP3' => 'imagen/gallery-img-02-alt.jpg',
                'descuentoP' => 0,
                'metodoP' => 'Online',
                 'costoEnvio' => 0,
                'tiempoEntrega' => 0,
                'devolucionP' => '30 días garantizados',
                'garantiaP' => 12,
                 'certificacionP' => 'ISO 9001',
                  'autP' => 1,
                 'id_categoria' => 5,
                 
                 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombreP' => 'Panero',
                'descripcionP' => 'Panero de paja',
                 'materialP' => 'Paja',
                'precioP' => 200.00, 
                'stock' => 10, 
                'colorP' => 'Natural',
                 'tipoP' => 'Almacenamiento',
                'imgP' => 'imagen/p5.webp',
                 'imgP2' => 'imagen/gallery-img-02-alt.jpg',
                 'imgP3' => 'imagen/gallery-img-02-alt.jpg',
                'descuentoP' => 0,
                'metodoP' => 'Online',
                 'costoEnvio' => 0,
                'tiempoEntrega' => 0,
                'devolucionP' => '30 días garantizados',
                'garantiaP' => 12,
                 'certificacionP' => 'ISO 9001',
                  'autP' => 1,
                 'id_categoria' => 6,

                  'created_at' => now(), 'updated_at' => now()
            ],
        ]);
      

        DB::table('publicas')->insert([
            ['id_artesano' => 1,
            'id_producto' => 1,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],
    
            ['id_artesano' => 1,
            'id_producto' => 2,
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
    
            ['id_artesano' => 1,
            'id_producto' => 6,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()],
    
            ['id_artesano' => 1,
            'id_producto' => 7,
            'fechaP'      => Carbon::now()->format('Y-m-d'),
            'estadoP'     => 1,  // Suponemos que el estado es activo (1)
            'created_at'  => now(),
            'updated_at'  => now()]
        ]);

    
    
    
    
    
        }
}
