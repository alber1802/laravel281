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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_usuario'); // Definir 'id_usuario' como clave primaria
            $table->string('nombre', 100);//
            $table->string('paterno', 100);
            $table->string('materno', 100);
            $table->string('telefono', 20);
            $table->string('direccion', 255);
            $table->char('sexo', 1);
            $table->date('fecha_nacimiento');
            $table->string('url', 255)->nullable();
            //
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
