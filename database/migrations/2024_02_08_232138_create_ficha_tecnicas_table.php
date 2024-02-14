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
        Schema::create('ficha_tecnicas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom_propietario');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('nom_propiedad');
            $table->string('barrio');
            $table->string('direccion');
            $table->foreignId('user_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_tecnicas');
    }
};
