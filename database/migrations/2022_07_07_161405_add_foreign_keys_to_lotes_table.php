<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lotes', function (Blueprint $table) {
            $table->foreign(['cliente_id'], 'lotes_FK')->references(['id_cliente'])->on('clientes');
            $table->foreign(['modulo_id'], 'lotes_FK_2')->references(['id_modulo'])->on('modulos');
            $table->foreign(['referencia_id'], 'lotes_FK_1')->references(['id_referencia'])->on('referencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lotes', function (Blueprint $table) {
            $table->dropForeign('lotes_FK');
            $table->dropForeign('lotes_FK_2');
            $table->dropForeign('lotes_FK_1');
        });
    }
}
