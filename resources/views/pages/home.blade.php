@extends('main')

@section('content')
<section class="header section-padding">
	<div class="background">&nbsp;</div>
	<div class="container">
		<div style="margin-top: 180px">

		</div>
	</div>
</section>
<div class="container" style="padding-top:32%">
	<section class="section-padding">
		<div class = "jumbotron text-center">
			<!-- We will put our task here-->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 style="color:#f65026; font-size: 40px">
						<span style="color:grey">Recent</span> Events
					</h1>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Date</th>
									<th class="text-center">Event's Name</th>
									<th class="text-center">Event Type</th>
									<th class="text-center">Description</th>
									<th class="text-center">Venue</th>
								</tr>
							</thead>
							<tbody>
								@foreach($events as $event)
								<tr>
									<td>{{ $event->id }}</td>
									<td>{{ $event->date }}</td>
									<td>{{ $event->name }}</td>
									<td>{{ $event->onoff}}</td>
									<td>{{ $event->description }}</td>
									<td>{{ $event->venue }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
		</div>
	</section>
</div>
@include('partials._messages')
@stop
