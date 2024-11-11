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
        Schema::create('sensores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_sensor'); // Nombre del sensor, por ejemplo, "Sensor de PH"
            $table->string('unidad_medida'); // Unidad de medida, por ejemplo, "pH", "ppm", "°C"
            $table->decimal('lectura', 8, 2)->nullable(); // Valor de la lectura, con dos decimales
            $table->date('fecha_instalacion'); // Fecha de instalación del sensor
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensores');
    }
};
