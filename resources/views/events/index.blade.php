@extends('main')
@section('content')
<div class="jumbotron text-center">
	<h1>Events Listed</h1>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1>Events</h1>
			@include('partials._messages')
		</div>
		<div class="col-md-2">
			<a href="{{ route('events.create') }}" class="btn btn-lg btn-primary btn-block btn-h1-spacing">Create Event</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>	<!-- end of row -->

	<div class="row">
		<div class="col-md-12 table-responsive">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Date</th>
					<th>Name</th>
					<th>Event Type</th>
					<th>Description</th>
					<th>Venue</th>
					<th>Created at</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($events as $event)
							<tr>
								<th>{{ $event->id }}</th>
								<td>{{ $event->date }}</td>
								<td>{{ $event->name }}</td>
								<td>{{ $event->onoff}}</td>
								<td>{{ $event->description }}</td>
								<td>{{ $event->venue }}</td>
								<td>{{ date('M j, Y', strtotime($event->created_at)) }}</td>
								<td>
									<a href="{{route('events.edit', $event->id)}}"><input type="image" src="/images/edit3.png" alt="Edit" height="15" title="Edit"></a>
								</td>
								<td>
									{!! Form::open(['route'=>['events.destroy',$event->id], 'method'=>'delete', 'onsubmit'=>"return confirm('Do you really want to delete the event ?')"]) !!}
									<input type="image" src="/images/DeleteRed.png" alt="Delete" height="15" title="Delete">
									{!! Form::close() !!}
								</td>
							</tr>
					@endforeach
				</tbody>
			</table>
			<hr>
		</div>
	</div>
</div>
<div class="blank"></div>
@endsection