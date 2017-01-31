@extends('main')
@section('title', 'All Blog Post')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<br><h1 class="text-center">All Posts</h1><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>#</th>
						<th>Title</th>
						<th>Body</th>
						<th>Updated</th>
						<th></th>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<td>{{$post->id}}</td>
								<td><a href="{{route('posts.show', $post->id)}}" class="">{{$post->title}}</a></td>
								<td><p>{{substr($post->body, 0, 30)}}{{strlen($post->body)>50?"....":""}}</p></td>
								<td>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</td>
								<td><a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">VIEW</a><a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">EDIT</a></td>
							</tr>
						@endforeach
					</tbody>
				</table><br>
			</div>
		</div>
	</div>
@stop