<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantillaOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantilla_operaciones', function (Blueprint $table) {
            $table->bigIncrements('id_plantilla_operaciones');
            $table->unsignedBigInteger('plantilla_id')->nullable()->index('plantilla_operaciones_FK_1');
            $table->unsignedBigInteger('operacion_id')->nullable()->index('plantilla_operaciones_FK');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plantilla_operaciones');
    }
}
