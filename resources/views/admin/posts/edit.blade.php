@extends('template')

@section('content')
	
	<h1>Edit post</h1>
	

	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	
	{!! Form::open([ 'route'=> ['admin.posts.update', $post->id ], 'method' => 'put']) !!}
	
	<div class="form-group">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', $post->title , ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	{!! Form::label('content', 'Content:') !!}
	{!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	{!! Form::submit('Create post',['class'=> 'btn btn-primary'] ) !!}
	</div>

	{!! Form::close() !!}


@stop