<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsuarioOperacionPaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuario_operacion_paquetes', function (Blueprint $table) {
            $table->foreign(['usuario_id'], 'usuario_operacion_paquetes_FK')->references(['id'])->on('users');
            $table->foreign(['operacion_id'], 'usuario_operacion_paquetes_FK_2')->references(['id_operacion'])->on('operaciones');
            $table->foreign(['paquete_id'], 'usuario_operacion_paquetes_FK_1')->references(['id_paquete'])->on('paquetes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario_operacion_paquetes', function (Blueprint $table) {
            $table->dropForeign('usuario_operacion_paquetes_FK');
            $table->dropForeign('usuario_operacion_paquetes_FK_2');
            $table->dropForeign('usuario_operacion_paquetes_FK_1');
        });
    }
}
