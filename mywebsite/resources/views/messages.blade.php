@extends('layouts.app')

@section('content')
	<h1>Messages</h1>
	  @if(count($messages) > 0)
	  	@foreach($messages as $message)
	  		<ul>
	  			<li class="list-group">Name: {{$message->name}}</li>
	  			<li class="list-group">Email: {{$message->email}}</li>
	  			<li class="list-group">Message: {{$message->message}}</li>
	  		</ul>
	  	
	  	@endforeach
	  @endif
@endsection