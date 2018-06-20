<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemonstResultExersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demonst_result_exers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ac_ano');
            $table->float('receita_bruta', 8,2);
            $table->float('deducoes', 8,2);
            $table->float('receita_liquida', 8,2);
            $table->float('custo', 8,2);
            $table->float('lucro_bruto', 8,2);
            $table->float('despesa_vendas', 8,2);
            $table->float('despesa_administrativa', 8,2);
            $table->float('despesa_financeira', 8,2);
            $table->float('result_antes_impostos', 8,2);
            $table->float('impostos', 8,2);
            $table->float('result_liquido', 8,2);
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
        Schema::dropIfExists('demonst_result_exers');
    }
}
