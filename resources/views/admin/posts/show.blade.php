@extends('template')

@section('content')
	
	<h1>Blog Admin</h1>
	<a href="{{route('admin.posts.create')}}" class="btn btn-success">Create new post</a>
	<a href="{{route('admin.posts.destroy',['id' => $post->id])}}" class="btn btn-danger pull-right">Delete post</a>
	<br>
	<br>
	<table class="table">
		<thed>
			<tr>
				<th>Title</th>
				<th>Content</th>
			</tr>
		</thed>
		
		<tbody>
			<tr>
				<td>{{ $post->title }}</td>
				<td>{{ $post->content }}</td>
			</tr>
		</tbody>
	</table>

@stop