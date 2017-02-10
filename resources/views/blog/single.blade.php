@extends('main')
@section('title', $post->title)
@section('content')
<div class="container home-pages">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<img src="{{ $post->image }}" class="img-thumbnail" width="100%" alt="{{ $post->title }} featured image">
			<h1 class="text-center heading-style">{{ $post->title }}</h1><br>
			<p>{{ $post->body }}</p>
			<div class="well">
				<p> Last updated: {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
			</div>
		</div>
	</div>
</div>
@stop