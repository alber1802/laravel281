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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->decimal('total_pagar', 10, 2);
            $table->date('fecha_pedido');
            $table->string('estadoP', 50);
            $table->decimal('descuento', 10, 2);
            $table->unsignedBigInteger('id_carrito'); 
            $table->string('numero_cuenta', 20);
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_repartidor');
            $table->foreign('id_carrito')->references('id_carrito')->on('carritos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('numero_cuenta')->references('numero_cuenta')->on('tarjetas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_repartidor')->references('id_repartidor')->on('repartidos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
