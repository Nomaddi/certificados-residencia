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
            $table->foreignId('id_tipoSolicitante')->references('id_tipoSolicitante')->on('tipo_solicitante');
            $table->foreignId('id_tipoDocumento')->references('id_tipoDocumento')->on('tipo_documento');
            $table->string('numeroIdentificacion', 50)->unique();
            $table->string('ciudadExpedicion', 100)->nullable();
            $table->timestamp('fechaNacimiento')->nullable();
            $table->foreignId('id_nivelEstudio')->references('id_nivelEstudio')->on('nivel_estudio');
            $table->foreignId('id_genero')->references('id_generos')->on('generos');
            $table->string('ocupacion', 100);
            $table->foreignId('id_roles')->references('id_roles')->on('roles')
                    ->onDelate('cascade')
                    ->onUpdate('cascade');

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
