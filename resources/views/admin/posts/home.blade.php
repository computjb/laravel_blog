@extends('template')
@section('content')
	
	<h1>Blog Admin</h1>
	<a href="" class="btn btn-success">Create new post</a>
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
					<a href="" class="btn btn-info">Edit</a>
					<a href="" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop