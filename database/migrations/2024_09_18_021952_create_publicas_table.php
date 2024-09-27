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
        Schema::create('publicas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_artesano');
            $table->unsignedBigInteger('id_producto');
            $table->date('fechaP');
            $table->boolean('estadoP');
            $table->timestamps();
            $table->foreign('id_artesano')->references('id_artesano')->on('artesanos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_producto')->references('id_producto')->on('productos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicas');
    }
};
