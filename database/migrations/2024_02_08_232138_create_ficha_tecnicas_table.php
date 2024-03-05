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
            $table->decimal('valor', 10 , 2);
            $table->float('administracion')->nullable();
            $table->string('tipo_inmueble');
            $table->string('tipo_transaccion');
            $table->integer('alcobas');
            $table->integer('closet');
            $table->integer('baño');
            $table->integer('estrato');
            $table->float('area');
            $table->string('piso');
            $table->boolean('calentador')->default(false);
            $table->boolean('vestier')->default(false);
            $table->boolean('cocina')->default(false);
            $table->boolean('balcon')->default(false);
            $table->boolean('sala_comedor')->default(false);
            $table->boolean('patio')->default(false);
            $table->boolean('zona_ropa')->default(false);
            $table->boolean('estudio_estar')->default(false);
            $table->boolean('red_gas')->default(false);
            $table->boolean('cuarto_util')->default(false);
            $table->boolean('ascensor')->default(false);
            $table->boolean('parqueadero')->default(false);
            $table->boolean('parqueadero_visitantes')->default(false);
            $table->boolean('juegos_infantiles')->default(false);
            $table->boolean('salon_social')->default(false);
            $table->boolean('propiedad_horizontal')->default(false);
            $table->boolean('citofono')->default(false);
            $table->boolean('unidad')->default(false);
            $table->boolean('tipo_porteria')->nullable();
            $table->boolean('shut_basura')->default(false);
            $table->boolean('jacuzzi')->default(false);
            $table->boolean('gimnasio')->default(false);
            $table->boolean('turco')->default(false);
            $table->boolean('biblioteca')->default(false);
            $table->boolean('circuito_cerrado')->default(false);







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
