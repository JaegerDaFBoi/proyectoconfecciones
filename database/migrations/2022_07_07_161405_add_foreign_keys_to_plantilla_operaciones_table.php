<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPlantillaOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plantilla_operaciones', function (Blueprint $table) {
            $table->foreign(['operacion_id'], 'plantilla_operaciones_FK')->references(['id_operacion'])->on('operaciones');
            $table->foreign(['plantilla_id'], 'plantilla_operaciones_FK_1')->references(['id_plantilla'])->on('plantillas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plantilla_operaciones', function (Blueprint $table) {
            $table->dropForeign('plantilla_operaciones_FK');
            $table->dropForeign('plantilla_operaciones_FK_1');
        });
    }
}
