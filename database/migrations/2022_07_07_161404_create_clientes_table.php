<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->string('nit', 100)->nullable();
            $table->string('razon_social', 250)->nullable();
            $table->string('telefono', 100)->nullable();
            $table->string('direccion', 250)->nullable();
            $table->string('direccion_2', 250)->nullable();
            $table->unsignedBigInteger('ciudad_id')->nullable()->index('clientes_FK');
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
        Schema::dropIfExists('clientes');
    }
}
