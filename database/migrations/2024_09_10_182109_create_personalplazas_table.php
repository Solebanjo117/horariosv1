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
        Schema::create('personalplazas', function (Blueprint $table) {
            $table->id();
            $table->string('tipoNombramiento')->nullable();
            $table->string('idPlaza',25);
            $table->foreign('idPlaza')->references('id')->on('plazas');
            $table->string('RFC',13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personalplazas');
    }
};
