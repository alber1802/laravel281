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
        Schema::create('obtienes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_resena');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_resena')->references('id_resena')->on('resenas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_producto')->references('id_producto')->on('productos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obtienes');
    }
};
