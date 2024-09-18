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
        Schema::create('recibes', function (Blueprint $table) {
            $table->id('id_recibe');
            $table->unsignedBigInteger('id_notificacion');
            $table->unsignedBigInteger('id_usuario');
            $table->boolean('estadoR');
            $table->foreign('id_notificacion')->references('id_notificacion')->on('notificacions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id_usuario')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recibes');
    }
};
