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
        Schema::create('personals', function (Blueprint $table) {
            $table->string('noTrabajador',4)->primary();
            $table->string('RFC',13)->index();
            $table->string('nombres',50);
            $table->string('apellidoP',50);
            $table->string('apellidoM',50);
            $table->string('licenciatura',200);
            $table->string('licPasTit',1)->nullable();
            $table->string('especializacion',200)->nullable();
            $table->string('espPasTit',1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
