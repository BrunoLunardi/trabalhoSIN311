@extends('layouts.app')
@section('title', 'Cadastrar vendas')
@section('content')

		<h1>Cadastrar Compras</h1>
			{{Form::open(['action' => 'CompraController@store'])}}

			{{Form::label('material_id','Material')}}
			{{Form::text('material_id','', ['class'=>'form-control', 'required', 'placeholder'=>'Material'])}}
			
			{{Form::label('tipo_material','Tipo do material')}}
			{{Form::text('tipo_material','', ['class'=>'form-control', 'required', 'placeholder'=>'Tipo do material'])}}

			{{Form::label('valor_por_kg','Valor Kilo')}}
			{{Form::text('valor_por_kg','', ['class'=>'form-control', 'required', 'placeholder'=>'Valor Kilo'])}}

			{{Form::label('peso','Peso')}}
			{{Form::text('valor_por_kg','', ['class'=>'form-control', 'required', 'placeholder'=>'Valor Kilo'])}}

			{{Form::label('nome_associado','Nome associado')}}
			{{Form::text('nome_associado','', ['class'=>'form-control', 'required', 'placeholder'=>'Nome Associado'])}}

			<br/>

			{{Form::submit('Cadastrar!', ['class'=>'btn btn-default'])}}

			{{Form::close()}}

@endsection