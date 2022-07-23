<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaqueteEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete_eventos', function (Blueprint $table) {
            $table->bigIncrements('id_paquete_evento');
            $table->unsignedBigInteger('evento_id')->nullable()->index('paquete_eventos_FK_1');
            $table->unsignedBigInteger('usuario_id')->nullable()->index('paquete_eventos_FK');
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
        Schema::dropIfExists('paquete_eventos');
    }
}
