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
        Schema::table('horarios', function (Blueprint $table) {
            $table->foreign('noTrabajador')->references('noTrabajador')->on('personals');
        });
        Schema::table('personalplazas', function (Blueprint $table) {
            $table->foreign('RFC')->references('RFC')->on('personals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('horarios', function (Blueprint $table) {
           $table->dropForeign('horarios_notrabajador_foreign');
        });
        Schema::table('personalplazas', function (Blueprint $table) {
            $table->dropForeign('personalplazas_rfc_foreign');
         });
    }
};
