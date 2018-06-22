<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Compra;


class CompraController extends Controller
{

	public function index(){
   		//$vendas = Venda::all();
   		//return view('venda.index', array('vendas' => $vendas ));
   		return view('compra.index');
   	}


    /*
    Método para salvar nova venda (vem da view index.blade.php
    Request-> classe necessária para acessar dados do formulário e tratar requisições HTTP
    */
    public function store(Request $request){
        //validação de erros (necessário alterações na view create.blade.php)
/*        $this->validate($request, [
            'referencia' => 'required|unique:produtos|min:3',
            'titulo'=>'required|min:3',
            ]);*/
        $venda = new Venda();
        $venda->tipo_material = $request->input('tipo_material');
        $venda->valor_por_kg = $request->input('valor_por_kg');
        $venda->peso = $request->input('peso');
        $venda->nota_fiscal = $request->input('nota_fiscal');
        $venda->nome_comprador = $request->input('nome_comprador');
        $venda->material_id = $request->input('material_id');
        if($venda->save()){
            return redirect('venda');
        }
    }   	   	

}
