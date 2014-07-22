@extends('layouts/default')

@section('Content')

	<div>
		<div class="container">
		<h2>Register for Events</h2>
			{{ Form::open( ['route' => 'user.store'] ) }}
				{{ Form::text('username', null, array('placeholder' => 'Username', 'class' => 'form-control', 'autofocus')) }}
				{{ Form::text('email', null, array('placeholder' => 'Email Address', 'class' => 'form-control')) }}
				{{ Form::text('password', null, array('placeholder' => 'Password', 'class' => 'form-control')) }}
				{{ Form::submit() }}
			{{ Form::close() }}
		</div>
	</div>
@stop