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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id_empleado');
            $table->string('nombreEm', 60);
            $table->string('apellidosEm', 60);
            $table->string('puestoEm', 30);
            $table->integer('telefonoEm')->nullable();
            $table->string('direccion', 60)->nullable();

            $table->unsignedBigInteger('id_tipoE');
            $table->string('usuario');
            $table->foreign('id_tipoE')->references('id_tipoE')->on('tipo_empleados');
            $table->foreign('usuario')->references('usuario')->on('logins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
