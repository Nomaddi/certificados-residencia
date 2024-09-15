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
            $table->id('id_solicitante');
            $table->timestamp('fechaRegistro');
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('correoElectronico', 100);
            $table->string('telefonoContacto', 20);
            $table->unsignedBigInteger('id_t_Solicitante');
            $table->unsignedBigInteger('id_tipoDocumento');
            $table->string('numeroIdentificacion', 50)->unique();
            $table->string('ciudadExpedicion', 100)->nullable();
            $table->timestamp('fechaNacimiento')->nullable();
            $table->unsignedBigInteger('id_n_Estudio');
            $table->unsignedBigInteger('id_genero');
            $table->string('ocupacion', 100);
            $table->unsignedBigInteger('id_role');

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
