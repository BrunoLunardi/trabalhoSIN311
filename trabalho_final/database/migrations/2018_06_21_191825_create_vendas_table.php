<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_material');
            $table->decimal('valor_por_kg')->nullable(false);
            $table->integer('peso')->nullable(false);
            //$table->foreign('id_material')->references('id')->on('materials');
            $table->char('nota_fiscal')->default('N',2);
            $table->string('nome_comprador');
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
        Schema::dropIfExists('vendas');
    }
}
