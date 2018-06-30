@extends('main')

@section('content')
<div class="jumbotron text-center">
	<h1>Edit Events</h1>
</div>
<div class="container">
	<div class="row">
		{!! Form::model($event,['route'=>['events.update',$event->id], 'method'=>'PUT']) !!}   <!-- Form Binding is used to have text in the input field-->
		<div class="col-md-8">

			<div class="form-group">
				{{ Form::label('date', 'Date: ', ['class'=>'lead']) }}
				{{ Form::text('date', null, ['class'=>'form-control', 'required'=>'', 'maxlength'=>'255']) }}
			</div>
			<div class="form-group">
				{{ Form::label('name', 'Name: ', ['class'=>'lead']) }}
				{{ Form::text('name', null, ['class'=>'form-control', 'required'=>'','maxlength'=>'255']) }}
			</div>
			<div class="form-group"> 
				{{ Form::label('onoff','Event Type: ') }}
				{{ Form::text('onoff', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255', 'placeholder'=>'Online/Offline')) }}
			</div>
			<div class="form-group">
				{{ Form::label('desc', 'Event Description: ', ['class'=>'lead']) }}
				{{ Form::text('description', null, ['class'=>'form-control', 'required'=>'','maxlength'=>'255']) }}
			</div>
			<div class="form-group">
				{{ Form::label('venue', 'Venue: ', ['class'=>'lead']) }}
				{{ Form::text('venue', null, ['class'=>'form-control', 'required'=>'', 'maxlength'=>'255']) }}
			</div>
			<hr>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">	<!-- definition list (HTML5) -->
					<dt>Created At:</dt>	<!-- definition title (HTML5) -->
					<!--Using php date function syntax: date('$format', timestamp) in database timestamp is stored in string format, so use strtotime-->
					<dd>{{ date('M j, Y h:ia',strtotime($event->created_at)) }}</dd><!-- definiton description (HTML5) 																		-->
				</dl>
				<dl class="dl-horizontal">	<!-- definition list (HTML5) -->
					<dt>Last Updated At:</dt>	<!-- definition title (HTML5) -->
					<dd>{{ date('M j, Y h:ia',strtotime($event->updated_at)) }}</dd>	<!-- definiton description (																						HTML5) -->
				</dl>
				<hr>
				<div class="row">
					<div class="col-md-6">
						{!! Html::linkroute('events.index', 'Cancel', array($event->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-md-6">
						{{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block']) }}
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@stop