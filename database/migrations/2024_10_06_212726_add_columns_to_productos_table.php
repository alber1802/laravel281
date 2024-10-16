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
        Schema::table('productos', function (Blueprint $table) {
            $table->string('imgP2')->after('imgP');
            $table->string('imgP3')->after('imgP2');
            $table->integer('descuentoP')->after('imgP3');
            $table->string('metodoP', 50)->after('descuentoP');
            $table->integer('costoEnvio')->after('metodoP');
            $table->integer('tiempoEntrega')->after('costoEnvio');
            $table->string('devolucionP')->after('tiempoEntrega');
            $table->integer('garantiaP')->after('devolucionP');
            $table->string('certificacionP')->after('garantiaP');
            $table->integer('autP')->after('certificacionP');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn(['imgP2', 'imgP3', 'descuentoP', 'metodoP', 'costoEnvio', 'tiempoEntrega', 'devolucionP', 'garantiaP', 'certificacionP', 'autP']);
        });
    }
};
