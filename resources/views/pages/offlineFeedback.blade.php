@extends('main')

@section('content')
<div class="jumbotron text-center">
  <h1>Feedbacks are always welcome!!!</h1>
</div>

<div class="container" style="background: #ffffff">
  <h2>Offline Event Feedback</h2>
  <hr>
  <div class="field_required">
    {{ Html::ul($errors->all(), array('class'=>'errors'))}}
  </div>
  {!! Form::open(['url'=>'feedback']) !!}

  <div class="form-group">
   <label>1. Which Event did you attend? <label class="field_required">*</label></label>
   <select class="form-control" name="event_name">
    @foreach($events as $event){
      @if($event->onoff == "offline")
      <option value="{{$event->id}}">{{ $event->name }}</option>
      @endif
      }
    @endforeach
  </select>
</div>

<div class="form-group">
 <label>2. How did you hear about the event?<label class="field_required">*</label></label>
 <div class="checkbox checkbox-success">
  <input id="checkbox1" type="checkbox" value="poster" name="event_heard_from">
  <label for="checkbox1">Poster</label>
</div>
<div class="checkbox checkbox-success">
  <input id="checkbox2" type="checkbox" value="class_orientation" name="event_heard_from">
  <label for="checkbox2">Class Orientation</label>
</div>
<div class="checkbox checkbox-success">
  <input id="checkbox3" type="checkbox" value="friends" name="event_heard_from">
  <label for="checkbox3">Friends</label>
</div>
<div class="checkbox checkbox-success">
  <input id="checkbox4" type="checkbox" value="seniors" name="event_heard_from">
  <label for="checkbox4">Seniors</label>
</div>
<div class="checkbox checkbox-success">
  <input id="checkbox5" type="checkbox" value="others" name="event_heard_from">
  <label for="checkbox5">Others</label>
</div>
</div>

<div class="form-group">
 <label>3. How satisfactory was the event?<label class="field_required">*</label></label>
 <div class="table-responsive">
  <table class="table">
   <thead>
    <tr>
     <td>#</td>
     <td>Fields</td>
     <td>Worst</td>
     <td>Bad</td>
     <td>Average</td>
     <td>Good</td>
     <td>Outstanding</td>
   </tr>
 </thead>
 <tbody>

  <tr>
   <td>1.</td>
   <td>Content</td>
   <td>
    <label class="btn btn-primary">
     <input type="radio" name="one" id="option3" value="1"> 1
   </label>
 </td>
 <td>
  <label class="btn btn-primary">
   <input type="radio" name="one" id="option3" value="2"> 2
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="one" id="option3" value="3"> 3
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="one" id="option3" value="4"> 4
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="one" id="option3" value="5"> 5
 </label>
</td>
</tr>

<tr>
 <td>2.</td>
 <td>Presentation</td>
 <td>
  <label class="btn btn-primary">
   <input type="radio" name="two" id="option3" value="1"> 1
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="two" id="option3" value="2"> 2
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="two" id="option3" value="3"> 3
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="two" id="option3" value="4"> 4
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="two" id="option3" value="5"> 5
 </label>
</td>
</tr>

<tr>
 <td>3.</td>
 <td>Speaker</td>
 <td>
  <label class="btn btn-primary">
   <input type="radio" name="three" id="option3" value="1"> 1
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="three" id="option3" value="2"> 2
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="three" id="option3" value="3"> 3
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="three" id="option3" value="4"> 4
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="three" id="option3" value="5"> 5
 </label>
</td>
</tr>

<tr>
 <td>4.</td>
 <td>Support Staff</td>
 <td>
  <label class="btn btn-primary">
   <input type="radio" name="four" id="option3" value="1"> 1
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="four" id="option3" value="2"> 2
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="four" id="option3" value="3"> 3
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="four" id="option3" value="4"> 4
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="four" id="option3" value="5"> 5
 </label>
</td>
</tr>
<tr>
 <td>5.</td>
 <td>Organization</td>
 <td>
  <label class="btn btn-primary">
   <input type="radio" name="five" id="option3" value="1"> 1
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="five" id="option3" value="2"> 2
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="five" id="option3" value="3"> 3
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="five" id="option3" value="4"> 4
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="five" id="option3" value="5"> 5
 </label>
</td>
</tr>
</tbody>
</table>
</div>
</div> 

<tr>
 <td>6.</td>
 <td>Location</td>
 <td>
  <label class="btn btn-primary">
   <input type="radio" name="six" id="option3" value="1"> 1
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="six" id="option3" value="2"> 2
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="six" id="option3" value="3"> 3
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="six" id="option3" value="4"> 4
 </label>
</td>
<td>
  <label class="btn btn-primary">
   <input type="radio" name="six" id="option3" value="5"> 5
 </label>
</td>
</tr>
</tbody>
</table>
</div>
</div>  

<div class="form-group">
 <label>4. How likely , would you recommend this event to your friends?<label class="field_required">*</label></label>
 <div class="Demo-boot">
  <div class="btn-group" data-toggle="buttons" style="width: 100%">
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="recommend" id="option1" value="0"> 0
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="recommend" id="option2" value="1"> 1
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="recommend" id="option3" value="2"> 2
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="recommend" id="option3" value="3"> 3
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="recommend" id="option3" value="4"> 4
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="recommend" id="option3" value="5"> 5
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="recommend" id="option3" value="6"> 6
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="recommend" id="option3" value="7"> 7
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="recommend" id="option3" value="8"> 8
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="recommend" id="option3" value="9"> 9
    </label>

  </div>
</div>
</div>  

<div class="form-group">
 <label>5. Overall, how would you rate the event ?<label class="field_required">*</label></label>
 <div class="Demo-boot">
  <div class="btn-group" data-toggle="buttons" style="width: 100%">
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="overall" id="option1" value="0"> 0
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="overall" id="option2" value="1"> 1
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="overall" id="option3" value="2"> 2
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="overall" id="option3" value="3"> 3
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="overall" id="option3" value="4"> 4
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="overall" id="option3" value="5"> 5
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="overall" id="option3" value="6"> 6
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="overall" id="option3" value="7"> 7
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="overall" id="option3" value="8"> 8
    </label>
    <label class="btn btn-primary" style="width: 10%">
      <input type="radio" name="overall" id="option3" value="9"> 9
    </label>
  </div>
 </div>
</div>

<div class="form-group">
  <label for="yes/no">6. Do you want such events to be conducted ?<label class="field_required">*</label></label>
  <div class="Demo-boot">
    <div class="btn-group" data-toggle="buttons" style="width: 100%">
      <label class="btn btn-primary" style="width: 10%">
        <input type="radio" name="yes_no" id="option1" value="1"> YES
      </label>
      <label class="btn btn-primary" style="width: 10%">
        <input type="radio" name="yes_no" id="option2" value="0"> NO
      </label>
    </div>
  </div>
</div>

<div class="form-group">
 <label for="suggestion">7. Any suggestion(s)</label>
 <textarea id="suggestion" class="form-control" rows="10" name="suggestions" placeholder="Give your suggestions here"></textarea>
</div>

<hr>
<center><input type="submit" name="sub" class="btn btn-success btn-lg">
  <input type="reset" name="sub" class="btn btn-danger btn-lg"></center>
</form>
</div>


@stop


