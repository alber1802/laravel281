<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('repartidos', function (Blueprint $table) {

            $table->unsignedBigInteger('id_repartidor');  // Declarar id_artesano
            $table->primary('id_repartidor');             // Usar id_artesano como clave primaria
            $table->boolean('disponibilidadR');
            $table->integer('calificacionR');
            $table->unsignedBigInteger('id_vehiculo');
            $table->foreign('id_vehiculo')->references('id_vehiculo')->on('vehiculos');
            
            // Agregar claves foráneas después de definir las columnas
            $table->foreign('id_repartidor')->references('id_usuario')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repartidos');
    }
};