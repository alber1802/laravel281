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
        Schema::create('artesanos', function (Blueprint $table) { 
            $table->unsignedBigInteger('id_artesano');  // Declarar id_artesano
            $table->primary('id_artesano');             // Usar id_artesano como clave primaria
            $table->unsignedBigInteger('id_comunidad'); // Agregar id_comunidad
            $table->string('especialidadA', 255);
            $table->text('descripcionA');
            $table->integer('calificacionA');
            $table->timestamps();
            
            // Agregar claves foráneas después de definir las columnas
            $table->foreign('id_comunidad')->references('id_comunidad')->on('comunidads')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_artesano')->references('id_usuario')->on('users')->onDelete('cascade')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artesanos');
    }
};