<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioOperacionPaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_operacion_paquetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuario_id')->nullable()->index('usuario_operacion_paquetes_FK');
            $table->unsignedBigInteger('paquete_id')->nullable()->index('usuario_operacion_paquetes_FK_1');
            $table->unsignedBigInteger('operacion_id')->nullable()->index('usuario_operacion_paquetes_FK_2');
            $table->integer('unidades_terminadas')->nullable();
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_operacion_paquetes');
    }
}
