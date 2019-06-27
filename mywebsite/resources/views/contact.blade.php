@extends('layouts.app')

@section('content')
<h2>Contact</h2>
{!! Form::open(['url'=> 'contact/submit'])!!}
	<div class="form-group">
		<label>Name</label>
		<input class="form-control" type="text" name="name" >
	</div>
	<div class="form-group">
		<label>Email</label>
		<input class="form-control" type="text" name="email">
	</div>
	<div class="form-group">
		<label>Message</label>
		<textarea class="form-control" name="message"></textarea>
	</div>
	<div class="form-group">
		{{Form::submit('submit',['class'=>'btn btn-primary'])}}
	</div>

{!! Form::close() !!}
@endsection

