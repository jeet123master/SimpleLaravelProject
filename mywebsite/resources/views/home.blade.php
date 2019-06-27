@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>This website is a simple website designed with laravel which contains the details information about me. This website contains the messaging process and view of message in laravel</p>
@endsection

@section('sidebar')
	@parent
	<p>This is appended sidebar</p>
@endsection