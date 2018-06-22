<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FluxoController extends Controller
{

   	//exibe todos os patrimonios do BD
	public function index(){
   		$balancos = BalancoPatrimonial::all();
   		return view('balanco.index', array('balancos' => $balancos ));
   	}

}
