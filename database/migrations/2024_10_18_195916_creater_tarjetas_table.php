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
            $table->id('id_tarjeta');
            $table->unsignedBigInteger('id_pago'); 
            $table->string('numero_cuenta', 19);
            $table->string('nombre_titular', 255);
            $table->string('fecha_expiracion');
            $table->string('cvv');
            $table->string('tipo_tarjeta', 50);
            $table->decimal('monto', 10, 2);
            $table->timestamps();
            
            $table->foreign('id_pago')->references('id_pago')->on('pagos')->onDelete('cascade');
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
