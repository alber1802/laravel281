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
            $table->id();
            $table->unsignedBigInteger('id_metodoP');
            $table->string('correo');
            $table->string('contraseña'); // Considera almacenar de forma segura
            $table->string('tipo_pago'); // Visa, MasterCard, etc.
            $table->decimal('monto', 10, 2);
            $table->timestamps(); // Timestamps para created_at y updated_at

            // Definir la relación con el usuario
            $table->foreign('id_metodoP')->references('id_metodoP')->on('pagos')->onDelete('cascade');


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
