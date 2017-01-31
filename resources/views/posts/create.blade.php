@extends('main')
@section('title','New Post')
@section('content')
	<div class="container home-pages">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>Create New Blog</h1>
				{!! Form::open(['route' => 'posts.store']) !!}
					{!! csrf_field() !!}
					{{Form::label('title', 'Title:')}}
					{{Form::text('title', null, array('class'=>'form-control','style'=>'margin-bottom:30px;'))}}
					{{Form::label('body', 'Body Content:')}}
					{{Form::textarea('body', null, array('class'=>'form-control'))}}
					{{Form::submit('Create This Post', array('class'=>'btn btn-primary btn-md btn-block', 'style'=>'margin-top:30px;'))}}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection