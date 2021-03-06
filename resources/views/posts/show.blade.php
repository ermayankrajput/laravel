@extends('layouts.app')
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
			<div class="row text-center">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.edit', 'Edit Post', array($post->id), array('class' => 'btn btn-primary btn-block'))!!}
				</div>
				<div class="col-sm-6">
					{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Delete Post', ['class' => 'btn btn-danger btn-block']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection