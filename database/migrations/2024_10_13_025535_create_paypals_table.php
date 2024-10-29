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
        Schema::create('paypals', function (Blueprint $table) {
            $table->id('id_paypal');
            $table->unsignedBigInteger('id_pago'); // ID único parq9
            $table->string('correo');
            $table->string('tipo_tarjeta'); 
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
        Schema::dropIfExists('paypals');
    }
};
