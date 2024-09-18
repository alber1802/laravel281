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
        Schema::create('productos', function (Blueprint $table) { 
            $table->id('id_producto');
            $table->string('nombreP', 255);
            $table->text('descripcionP');
            $table->string('materialP', 255);
            $table->decimal('precioP', 10, 2);
            $table->integer('stock');
            $table->string('colorP', 50);
            $table->string('tipoP', 50);
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};