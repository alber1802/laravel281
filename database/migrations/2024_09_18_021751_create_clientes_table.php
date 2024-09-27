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
        Schema::create('clientes', function (Blueprint $table) 
        {
            $table->unsignedBigInteger('id_cliente');  // Declarar 'id_cliente' como columna
            $table->primary('id_cliente');             // Usar 'id_cliente' como clave primaria
            $table->text('preferencia');
            $table->timestamps();

            // Agregar clave foránea después de definir las columnas
            $table->foreign('id_cliente')->references('id_usuario')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
