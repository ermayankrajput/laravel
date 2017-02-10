@extends('layouts.app')
@section('title', 'All Blog Post')
@section('content')
<div class="container home-pages">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>Edit Post</h1>
				{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'patch', 'files' => true]) !!}
					{!! csrf_field() !!}
					{{Form::label('title', 'Title:')}}
					{{Form::text('title', null, array('class'=>'form-control','style'=>'margin-bottom:30px;'))}}
					{{Form::label('slug', 'Slug:')}}
					{{Form::text('slug', null, array('class'=>'form-control','style'=>'margin-bottom:30px;'))}}
					{{Form::label('body', 'Body Content:')}}
					{{Form::textarea('body', null, array('class'=>'form-control', 'style'=>'max-width:100%'))}}
					<br>
					<div class="row">
						<div class="col-sm-6">
							<img src="{{ $post->image }}" class="img-thumbnail" width="100%" alt="{{ $post->title }} featured image">
						</div>
						<div class="col-sm-6">
							<h4>Change Image</h4>
							{!! Form::file('image', null, array('class'=>'form-control')) !!}
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							{{Form::submit('Update Post', array('class'=>'btn btn-primary btn-md btn-block', 'style'=>'margin-top:30px;'))}}
						</div>
						<div class="col-sm-6">
							{!! Html::linkRoute('posts.show', 'Cancle Edit', array($post->id), array('class' => 'btn btn-danger btn-block', 'style'=>'margin-top:30px;'))!!}
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop