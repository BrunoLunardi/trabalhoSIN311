@extends('layouts.app')
@section('title', 'teste')
@section('content')

		<h1>Balanço Patrimonial</h1>

		<br>

		{{Form::open(['action' => 'BalancoController@store'])}}

		{{Form::label('ano','Ano do balanço')}}
		{{Form::text('ano','', ['class'=>'form-control', 'required', 'placeholder'=>'Digite o ano do balanço'])}}

		<br>
		<br>

		<ul>
			<li>Ativo circulante</li>
		</ul>

		<br>
		<br>

		{{Form::label('ac_caixa','Caixa')}}
		{{Form::text('ac_caixa','', ['class'=>'form-control', 'required', 'placeholder'=>'Digite o valor do caixa'])}}
		
		{{Form::label('ac_estoque','Estoque')}}
		{{Form::text('ac_estoque','', ['class'=>'form-control', 'required', 'placeholder'=>'Digite o valor do estoque'])}}

		{{Form::label('ac_receber_cliente','Cliente')}}
		{{Form::text('ac_receber_cliente','', ['class'=>'form-control', 'required', 'placeholder'=>'Digite o valor do receber cliente'])}}		


		<br>
		<br>

		<ul>
			<li>Ativo não circulante</li>
		</ul>

		<br>
		<br>

		{{Form::label('anc_imobilizado','Imobilizado')}}
		{{Form::text('anc_imobilizado','', ['class'=>'form-control', 'required', 'placeholder'=>'Digite o valor do Imobilizado'])}}

		<br>
		<br>

		<ul>
			<li>Passivo circulante</li>
		</ul>

		<br>
		<br>

		{{Form::label('pc_emprestimo_financiamento','Emprestimo/Financiamento')}}
		{{Form::text('pc_emprestimo_financiamento','', ['class'=>'form-control', 'required', 'placeholder'=>'Digite o valor do emprestimo/financiamento'])}}	


		{{Form::label('pc_fornecedores','Fornecedores')}}
		{{Form::text('pc_fornecedores','', ['class'=>'form-control', 'required', 'placeholder'=>'Digite o valor do fornecedores'])}}		


		<br>
		<br>

		<ul>
			<li>Passivo não circulante</li>
		</ul>

		{{Form::label('pnc_emprestimo_financiamento','Emprestimo/Financiamento Longo Prazo')}}
		{{Form::text('pnc_emprestimo_financiamento','', ['class'=>'form-control', 'required', 'placeholder'=>'Digite o valor do emprestimo/financiamento longo prazo'])}}	


		<br>

		<ul>
			<li>Patrimonio</li>
		</ul>

		{{Form::label('pl_capital_social','Capital Social')}}
		{{Form::text('pl_capital_social','', ['class'=>'form-control', 'required', 'placeholder'=>'Digite o valor do capital social'])}}	

		<br>


		<p>{{Form::submit('Cadastrar!', ['class'=>'btn btn-primary'])}}</p>

		{{Form::close()}}

				<a href="javascript:history.go(-1)">Voltar</a>		
@endsection