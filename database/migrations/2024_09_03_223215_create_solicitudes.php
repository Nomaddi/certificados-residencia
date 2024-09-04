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
            $table->id('id_solicitudes');
            $table->timestamp('fechaSolicitudes');
            $table->string('numeroIdentificacion', 50);
            $table->foreign('numeroIdentificacion')
                    ->references('numeroIdentificacion')
                    ->on('solicitantes')->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->timestamp('fechaActual')->nullable();
            $table->foreignId('id_barrios')->references('id_barrios')->on('barrios');
            $table->STRING('direccion', 100);
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
        Schema::dropIfExists('solicitudes');
    }
};
