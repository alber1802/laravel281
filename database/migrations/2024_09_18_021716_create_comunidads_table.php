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
        Schema::create('comunidads', function (Blueprint $table) {
            $table->id('id_comunidad');
            $table->string('nombreCo', 255);
            $table->string('ciudad', 100);
            $table->string('ubicacionC', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunidads');
    }
};
