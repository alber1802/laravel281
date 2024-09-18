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
        Schema::create('entregas', function (Blueprint $table) {
            $table->decimal('costo_entrega', 10, 2);
            $table->date('fecha_entrega');
            $table->string('direccion_entrega', 255);
            $table->string('estado_entrega', 50);
            $table->string('tipo_entrega', 50);
            $table->unsignedBigInteger('id_pedido');
            $table->unsignedBigInteger('id_repartidor');
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_repartidor')->references('id_repartidor')->on('repartidos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregas');
    }
};
