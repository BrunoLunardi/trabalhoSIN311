@extends('layouts.app')
@section('title', 'Cadastrar compra')
@section('content')

		<h1>Cadastrar vendas</h1>
			{{Form::open(['action' => 'CompraController@store'])}}

			{{Form::label('material_id','Material')}}
			{{Form::text('material_id','', ['class'=>'form-control', 'required', 'placeholder'=>'Material'])}}
			
			{{Form::label('tipo_material','Tipo do material')}}
			{{Form::text('tipo_material','', ['class'=>'form-control', 'required', 'placeholder'=>'Tipo do material'])}}

			{{Form::label('valor_por_kg','Valor Kilo')}}
			{{Form::text('valor_por_kg','', ['class'=>'form-control', 'required', 'placeholder'=>'Valor Kilo'])}}

			{{Form::label('peso','Peso')}}
			{{Form::text('valor_por_kg','', ['class'=>'form-control', 'required', 'placeholder'=>'Valor Kilo'])}}

			{{Form::label('nota_fiscal','Utilza Nota fiscal?')}}
			{{Form::text('nota_fiscal','', ['class'=>'form-control', 'required', 'placeholder'=>'Não'])}}

			{{Form::label('nome_comprador','Nome comprador')}}
			{{Form::text('nome_comprador','', ['class'=>'form-control', 'required', 'placeholder'=>'Nome comprador'])}}

			<br/>

			{{Form::submit('Cadastrar!', ['class'=>'btn btn-default'])}}

			{{Form::close()}}

@endsection