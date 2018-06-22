<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//nome do Model que está sendo utilizado para este controller
use App\BalancoPatrimonial;

//altera o aquivo web.php para acessar este controller
class BalancoController extends Controller
{
   
   	//exibe todos os patrimonios do BD
	public function index(){
   		$balancos = BalancoPatrimonial::all();
   		return view('balanco.index', array('balancos' => $balancos ));
   	}

   	//retorna a view create.blade.php da pasta balanco
   	public function show(){
//   		$balanco = BalancoPatrimonial::find($ano);
	   return view('balanco.create');
    }


     public function store(Request $request){

        $balanco = new BalancoPatrimonial();

        $ano = $request->input('ano');
        $ac_caixa = $request->input('ac_caixa');
        $ac_estoque = $request->input('ac_estoque');
        $ac_receber_cliente = $request->input('ac_receber_cliente');
        $anc_imobilizado = $request->input('anc_imobilizado');
        $pc_emprestimo_financiamento = $request->input('pc_emprestimo_financiamento');
        $pc_fornecedores = $request->input('pc_fornecedores');
        $pnc_emprestimo_financiamento = $request->input('pnc_emprestimo_financiamento');
        $pnc_emprestimo_financiamento = $request->input('pnc_emprestimo_financiamento'); 
        $pl_capital_social = $request->input('pl_capital_social');



        //ativo circulante
        $balanco->ano = $ano;
        $balanco->ac_caixa = $ac_caixa;
        $balanco->ac_estoque = $ac_estoque;
        $balanco->ac_receber_cliente = $ac_receber_cliente;
        //total ativo circulante
        $balanco->ac_total = $ac_caixa + $ac_estoque + $ac_receber_cliente;
        //ativo não circulate
        $balanco->anc_imobilizado = $anc_imobilizado;
        //total ativo não circulante
        $balanco->anc_total = $anc_imobilizado;

        //total ativo
        $balanco->ativo_total = $balanco->ac_total + $balanco->anc_total;

        //Passivo circulante
        $balanco->pc_emprestimo_financiamento = $pc_emprestimo_financiamento;
        $balanco->pc_fornecedores = $pc_fornecedores;
        //passivo total
        $balanco->pc_total = $pc_emprestimo_financiamento + $pc_fornecedores;

        //Passivo não circulante
        $balanco->pnc_emprestimo_financiamento = $pnc_emprestimo_financiamento;
        //Passivo não circulante total
        $balanco->pnc_total = $pnc_emprestimo_financiamento;

        //Patrimonio liquido
        $balanco->pl_capital_social = $pl_capital_social;
        //Patrimonio liquido total
        $balanco->pl_total = $pl_capital_social;

        $balanco->passivo_total = $balanco->pl_total + $balanco->pnc_total + $balanco->pc_total;

        if($balanco->save()){
            return redirect('balanco');
        }
    }

}
