@extends('main')
@section('content')
<div class="jumbotron text-center">
	<h1>{{$event->name}}</h1>
</div>
<div class="container">
	<div id="event_heard_from" style="height: 400px;"></div>
	<hr>
	<div id="satisfactory_rating" style="height: 400px;"></div>
	<hr>
	<div id="recommendation_rating" style="height: 200px;"></div>
	<hr>
	<div id="yes_no" style="height: 400px;"></div>
	<hr>
	<div id="overall" style="height: 200px;"></div>
	<hr>
	<div class="panel-group">
		<div class="panel panel-primary">
			<div class="panel-heading"><strong>Suggestions: </strong></div>
			<div class="panel-body">
				<ol>
					@foreach($feedbacks as $feedback)
						@if($feedback->suggestions!=NULL)
							<li>{{ $feedback->suggestions }}</li>
							<hr>
						@endif
					@endforeach
				</ol>
			</div>
		</div>
	</div>
	@piechart('event_heard', 'event_heard_from')
	@barchart('Rates', 'satisfactory_rating')
	@barchart('recommend', 'recommendation_rating')
	@columnchart('Yes_No', 'yes_no')
	@barchart('Overall', 'overall')
</div>
<div class="blank"></div>
@endsection