@extends('template')

@section('content')
	
	<h1>Blog Admin</h1>
	<a href="{{route('admin.posts.create')}}" class="btn btn-success">Create new post</a>
	<br>
	<br>
	<table class="table">
		<thed>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Action</th>
			</tr>
		</thed>
		
		<tbody>
			@foreach($posts  as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>
					<a href="{{route('admin.posts.edit',['id' => $post->id ])}}" class="btn btn-info">Edit</a>
					<a href="{{route('admin.posts.show',['id' => $post->id ])}}" class="btn btn-success">Ver</a>
					<a href="{{route('admin.posts.destroy',['id' => $post->id] )}}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="col-md-offset-5">
	 <!-- paginação -->
	 {!! $posts->render() !!}
	</div>

@stop