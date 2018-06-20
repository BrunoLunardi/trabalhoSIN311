@extends('layouts.app')
@section('title', $balanco->ano)
@section('content')

		<h1>Balanço Patrimonial {{$balanco->ano}}</h1>
		<ul>
				<li>Ativo circulante</li>
				<li>Caixa: {{$balanco->ano}}</a></li>
		</ul>
				<a href="javascript:history.go(-1)">Voltar</a>		
@endsection