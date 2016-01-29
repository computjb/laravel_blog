@extends('template')

@section('title')
	Pagina Inicial
@stop

@section('content')

	<h1>Noticias</h1>
	
		@foreach($dados as $dado)
		 <h2>{{ $dado->title }}</h2>
			<p>{{ $dado->content }}</p>
		@endforeach
	</ul>
	
@stop
