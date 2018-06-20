@extends('layouts.app')
@section('title', 'Balanço Patrimonial')
@section('content')

		<h1>Balanço Patrimonial</h1>
		<ul>
			@foreach($balancos as $balanco)
				<li><a href = "http://localhost:8000/balanco/{{$balanco->ano}}"> {{$balanco->ano}}</a></li>
			@endforeach
		</ul>
@endsection