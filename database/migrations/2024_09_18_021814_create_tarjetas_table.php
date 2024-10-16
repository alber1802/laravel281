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
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->id(); // ID único para la tarjeta
            $table->unsignedBigInteger('id_metodoP'); // ID único para la tarjeta
            $table->string('numero_cuenta', 19);
            $table->string('nombre_titular', 255);
            $table->string('fecha_expiracion');
            $table->string('cvv');
            $table->string('tipo', 50);
            $table->timestamps();
            
            $table->foreign('id_metodoP')->references('id_metodoP')->on('pagos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarjetas');
    }
};
