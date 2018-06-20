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

   	//exibe por ano
   	public function show($ano){
   		$balanco = BalancoPatrimonial::find($ano);
		echo "<pre>";
	   	print_r($balanco);
    	echo "</pre>";
   	}
}
