@extends('main')
@section('content')
<div class="jumbotron text-center">
	<h1>Which way you wanna go ?</h1>
</div>
<div class="container">
	<div class="row" id="choice">
        <div class="col-md-6 col-sm-12">
			<a href="/feedbackdashboard">
				<div class="select">
					<div class="graph-logo">

					</div>
				</div>
			</a>
		</div>
        <div class="col-md-6 col-sm-12">
			<a href="/events">
				<div class="select">
					<div class="event_develop-logo">

					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<div class="blank"></div>
@endsection
