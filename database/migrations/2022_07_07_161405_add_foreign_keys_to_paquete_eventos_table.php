<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPaqueteEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paquete_eventos', function (Blueprint $table) {
            $table->foreign(['usuario_id'], 'paquete_eventos_FK')->references(['id'])->on('users');
            $table->foreign(['evento_id'], 'paquete_eventos_FK_1')->references(['id_evento'])->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paquete_eventos', function (Blueprint $table) {
            $table->dropForeign('paquete_eventos_FK');
            $table->dropForeign('paquete_eventos_FK_1');
        });
    }
}
