<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
</head>
<body style="font-style: bold">
<h2>Feedback form</h2>
<div> Someone just feedbacked us:</div>
<div> <h3> Event Name: {{ $event_name }} </h3></div>
<div> Event heard by: {{ $event_heard_from }} </div>
<div> Ratings:
	<br>
	<br>
	<strong>Content:</strong> {{ $one }}/5;
	<br>
	<strong>Presentation:</strong> {{ $two }}/5;
	<br>
	<strong>Speaker:</strong> {{ $three }}/5;
	<br>
	<strong>Support Staff:</strong> {{ $four }}/5;
	<br>
	<strong>Location:</strong> {{ $five }}/5;
	<br>
</div>

<strong><div>How well organized was the event? {{ $organized }}/9</div></strong>
<div>Overall Satisfaction {{ $overall }}/9</div>
<div>Want such event to be conducted ?? {{$yes_no}}</div>
<div>Suggestions: {{ $suggestions }}</div>
</body>
</html>