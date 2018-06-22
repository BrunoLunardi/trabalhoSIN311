<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Compra;

use App\Material;




class CompraController extends Controller
{

	public function index(){
   		//$vendas = Venda::all();
   		//return view('venda.index', array('vendas' => $vendas ));

		$material = Material::lists('nome_material', 'id');

   		return view('compra.index', compact('material'));
   	}


    /*
    Método para salvar nova venda (vem da view index.blade.php
    Request-> classe necessária para acessar dados do formulário e tratar requisições HTTP
    */
//    public function store(Request $request){
        //validação de erros (necessário alterações na view create.blade.php)
/*        $this->validate($request, [
            'referencia' => 'required|unique:produtos|min:3',
            'titulo'=>'required|min:3',
            ]);*/
     
/*
        $compra = new Compra();
        $compra->tipo_material = $request->input('tipo_material');
        $compra->valor_por_kg = $request->input('valor_por_kg');
        $compra->peso = $request->input('peso');
        $compra->nota_fiscal = $request->input('nota_fiscal');
        $compra->nome_comprador = $request->input('nome_comprador');
        $compra->material_id = $request->input('material_id');
        if($venda->save()){
            return redirect('compra');

        }

        */
    //}   	   	

}
