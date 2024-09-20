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
            $table->id();
            $table->timestamp('fechaSolicitud');
            $table->string('numeroIdentificacion_id', 50);
            $table->timestamp('fechaActual');
            $table->unsignedBigInteger('barrio_id');
            $table->unsignedBigInteger('direccion');
            $table->string('ubicacion', 100);
            $table->string('evidenciaPDF', 255);  //trabajar con dumPDF

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
