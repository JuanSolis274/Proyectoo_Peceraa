<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monoxido_de_carbonos', function (Blueprint $table) {
            $table->id();
            $table->decimal('nivel_co', 5, 2); // Campo para el nivel de CO con hasta 2 decimales
            $table->timestamp('hora_medicion')->useCurrent(); // Hora de la medición con valor actual por defecto
            $table->boolean('estado_alarma')->default(false); // Estado de alarma, con valor por defecto 'false'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monoxido_de__carbonos');
    }
};
