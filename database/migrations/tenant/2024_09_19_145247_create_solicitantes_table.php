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
        Schema::create('solicitantes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fechaRegistro');
            $table->string('nombre_1', 100);
            $table->string('nombre_2', 100);
            $table->string('apellido_1', 100);
            $table->string('apellido_2', 100);
            $table->string('correoElectronico', 100);
            $table->string('telefonoContacto', 20);
            $table->string('numeroIdentificacion', 50)->unique();
            $table->string('ciudadExpedicion', 100);
            $table->timestamp('fechaNacimiento');
            $table->foreignId('nEstudio_id')->references('id')->on('n_estudios');
            $table->unsignedBigInteger('genero_id');
            $table->string('ocupacion', 100);
            $table->foreignId('rol_id')->references('id')->on('rols')
                    ->onDelate('cascade')
                    ->onUpdate('cascade');
            $table->unsignedBigInteger('tSolicitante_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitantes');
    }
};
