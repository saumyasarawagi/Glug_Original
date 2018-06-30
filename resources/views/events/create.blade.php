@extends('main')

@section('content')
	<div class="jumbotron text-center"><h1>Create the event</h1></div>
	<div class="container" style="width: 800px;">
		@include('partials._messages')
		<hr>
		{{Form::open(['route'=>'events.store'])}}
			<div class="form-group"> 
				{{ Form::label('date','Date: ') }}
				{{ Form::text('date', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255', 'placeholder'=>'2nd July')) }}
			</div>
			<div class="form-group"> 
				{{ Form::label('name','Name: ') }}
				{{ Form::text('name', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255', 'placeholder'=>'Event Name')) }}
			</div>
			<div class="form-group"> 
				{{ Form::label('onoff','Event Type: ') }}
				{{ Form::text('onoff', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255', 'placeholder'=>'online/offline')) }}
			</div>
			<div class="form-group"> 
				{{ Form::label('desc','Event Description: ') }}
				{{ Form::text('desc', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255', 'placeholder'=>'Event Description')) }}
			</div>
			<div class="form-group"> 
				{{ Form::label('venue','Venue: ') }}
				{{ Form::text('venue', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255', 'placeholder'=>'venue')) }}
			</div>
			{{ Form::submit('Create Event',array('class' => 'btn btn-success btn-lg')) }}
			<hr>
		{!! Form::close() !!}
	</div>
@endsection
