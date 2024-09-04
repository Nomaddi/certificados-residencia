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
        Schema::create('validaciones', function (Blueprint $table) {
            $table->id('id_validaciones');
            $table->foreignId('id_solicitudes')->references('id_solicitudes')->on('solicitudes');
            $table->timestamp('fechaValidacion');
            $table->boolean('validacionSalud');
            $table->string('evidenciaSalud', 255);
            $table->boolean('validacionElecciones');
            $table->string('evidenciaElecciones', 255);
            $table->boolean('validacionJuntas');
            $table->string('evidenciaJuntas', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validaciones');
    }
};
