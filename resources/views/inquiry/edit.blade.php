@extends('layouts.master')
@section('content')
<div>

<form action = "{{route('inquiry.update',$inquiry->id)}}" method = "POST">
  <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
<div class ="row">
    <div class ="col-md-6"> 
        <label for ="source">Source</label> 
        <input type ="text" name ="source" id ="source" value = "{{$inquiry->source}}">
    </div>
    <div  class ="col-md-6">
        <label for ="type">Type</label>
        <input type ="text" name ="type" id ="type" value = "{{$inquiry->type}}">
   </div>
   <div  class ="col-md-6">
        <label for ="description">Description</label>
        <input type ="text" name ="description" id ="description"value = "{{$inquiry->description}}">
   </div>
   <div  class ="col-md-6">
        <label for ="staff_id">Staff ID</label>
        <input type ="text" name ="staff_id" id ="staff_id" value = "{{$inquiry->staff_id}}">
   </div>
   <div  class ="col-md-6">
        <label for ="student_id">Student Id</label>
        <input type ="text" name ="student_id" id ="student_id" value = "{{$inquiry->student_id}}">
   </div>
   <div  class ="col-md-6">
        <label for ="date_time">Date Time</label>
        <input type ="text" name ="date_time" id ="date_time" value = "{{$inquiry->date_time}}">
   </div>

</div>
<br>
  <input type ="submit" value="Edit">
</form>
</div>
 @endsection


