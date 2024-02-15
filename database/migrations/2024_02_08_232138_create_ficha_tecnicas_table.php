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
            $table->string('valor');
            $table->float('administracion')->nullable();
            $table->string('tipo_inmueble');
            $table->string('tipo_transaccion');
            $table->integer('alcobas');
            $table->integer('closet');
            $table->integer('baño');
            $table->integer('estrato');
            $table->float('area');
            $table->integer('piso');
            $table->boolean('calentador');
            $table->boolean('vestier');
            $table->boolean('cocina');
            $table->boolean('balcon');
            $table->boolean('sala_comedor');
            $table->boolean('patio');
            $table->boolean('zona_ropa');
            $table->boolean('estudio_estar');
            $table->boolean('red_gas');
            $table->boolean('cuarto_util');
            $table->boolean('ascensor');
            $table->boolean('parqueadero');
            $table->boolean('parqueadero_visitantes');
            $table->boolean('juegos_infantiles');
            $table->boolean('salon_social');
            $table->boolean('propiedad_horizontal');
            $table->boolean('citofono');
            $table->string('unidad')->nullable();
            $table->string('tipo_porteria')->nullable();
            $table->boolean('shut_basura');
            $table->boolean('jacuzzi');
            $table->boolean('gimnasio');
            $table->boolean('turco');
            $table->boolean('biblioteca');
            $table->boolean('circuito_cerrado');






            
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
