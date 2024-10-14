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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->string('id')->primary()->unique();
            $table->string('nombre',50);
            $table->string('email')->unique();
            $table->string('apellido');
            $table->string('apellidom')->nullable();
            $table->string('sexo',1);
            $table->string('carrera_id')->nullable();
            $table->foreign('carrera_id')->references('idCarrera')->on('carreras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
