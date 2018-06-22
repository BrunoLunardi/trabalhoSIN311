<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BalancoPatrimonial;

class IndicesController extends Controller
{
	
	public function index(){
   		$balancos = BalancoPatrimonial::all();
   		return view('indices.index', array('balancos' => $balancos ));
   	}

   	public function pesquisa(Request $request){

   		print_r (BalancoPatrimonial::where('ano', '=', request('ano') ));
   	}

}
