<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalancoPatrimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balanco_patrimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->int('ac_ano');
            $table->float('ac_caixa', 8,2);
            $table->float('ac_estoque', 8,2);
            $table->float('ac_receber_cliente', 8,2);
            $table->float('ac_total', 8,2);
            $table->float('anc_imobilizado', 8,2);
            $table->float('anc_total', 8,2);
            $table->float('pc_emprestimo_financiamento', 8,2);
            $table->float('pc_fornecedores', 8,2);
            $table->float('pc_total', 8,2);
            $table->float('pnc_emprestimo_financiamento', 8,2);
            $table->float('pnc_total', 8,2);
            $table->float('pl_capital_social', 8,2);
            $table->float('pl_total', 8,2);
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
        Schema::dropIfExists('balanco_patrimonials');
    }
}
