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
        Schema::create('carritos', function (Blueprint $table) {
            $table->id('id_carrito');
            $table->unsignedBigInteger('id_cliente');
      
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * table->integer('cantidadP');
     */
    public function down(): void
    {
        Schema::dropIfExists('carritos');
    }
};
