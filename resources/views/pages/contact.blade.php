@extends('main')
@section('title', 'Contact Basic Blog')
@section('content')
<div class="container home-pages">
	<div class="row">
		<div class="text-center">
			<h1>CONTACT US</h1><br>
		</div>
		<div class="col-md-8 col-md-offset-2 text-center">
			<form action="{{url('contact')}}" method="POST">
				{{csrf_field()}}
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input id="email" type="email" class="form-control has-success" name="email" placeholder="Email" required>
				</div><br>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-inbox"></i></span>
				<input id="subject" type="text" class="form-control" name="subject" placeholder="Subject" required>
				</div><br>
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<textarea id="message" type="text" class="form-control" name="message" placeholder="Message..." style="max-width: 100%;" rows="6"></textarea>
				</div><br>
				<button type="submit" class="btn btn-info">Submit</button>
			</form>
		</div>
	</div>
</div>
@stop