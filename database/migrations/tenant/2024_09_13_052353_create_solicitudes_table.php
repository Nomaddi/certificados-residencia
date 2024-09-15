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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('id_solicitud');
            $table->timestamp('fechaSolicitud');
            $table->string('numeroIdentificacion', 50);
            $table->timestamp('fechaActual')->nullable();
            $table->unsignedBigInteger('id_barrios');
            $table->string('direccion', 100);
            $table->string('ubicacion', 100);
            $table->string('evidenciaPDF', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicituds');
    }
};
