<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->bigIncrements('id_lote');
            $table->unsignedBigInteger('cliente_id')->index('lotes_FK');
            $table->unsignedBigInteger('referencia_id')->index('lotes_FK_1');
            $table->unsignedBigInteger('modulo_id')->nullable()->index('lotes_FK_2');
            $table->unsignedInteger('unidades');
            $table->integer('activo')->nullable();
            $table->integer('finalizado')->nullable();
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
        Schema::dropIfExists('lotes');
    }
}
