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
			@foreach($posts as $post)
				<div class="col-md-12" style="margin-bottom: 50px;">
					<div class="col-md-4">
						<a href="{{route('blog.single', $post->slug)}}">
							<img src="{{ $post->image }}" class="img-thumbnail" width="100%" alt="{{ $post->title }} featured image">
							<br>
						</a>
					</div>
					<div class="col-md-8">
						<a href="{{route('blog.single', $post->slug)}}">
							<h3>{{$post->title}}</h3>
						</a>
						<p>{{substr($post->body, 0, 200)}}{{strlen($post->body)>200?"....":""}}</p>
					</div>
					<br>
				</div>
				<hr>
			@endforeach
			<br>
			<div class="col-md-12">
				<div class="text-center">
					{!! $posts->links(); !!}
				</div>
			</div>
			<br>
		</div>
	</div>
@stop