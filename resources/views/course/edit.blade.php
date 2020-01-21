@extends('layouts.master')
@section('content')
<div>

<form action = "{{route('course.update',$course->id)}}" method = "POST">
  <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
<div>
    <div> 
        <label for ="course_id">Course ID</label> 
        <input type ="text" name ="course_id" id ="course_id" value = "{{$course -> course_id}}">
    </div>
    <div>
        <label for ="course_name">Course Name</label>
        <input type ="text" name ="course_name" id ="course_name"value = "{{$course -> course_name}}">
   </div>
   <div>
        <label for ="registration_date">Registraion Date</label>
        <input type ="text" name ="registration_date" id ="registration_date"value = "{{$course -> registration_date}}">
   </div>
   <div>
        <label for ="course_fees">Course Fees</label>
        <input type ="text" name ="course_fees" id ="course_fees"value = "{{$course -> course_fees}}">
   </div>
   <div>
        <label for ="description">Description</label>
        <input type ="text" name ="description" id ="description"value = "{{$course -> description}}">
   </div>
   <div>
        <label for ="start_by">Start By</label>
        <input type ="text" name ="start_by" id ="start_by"value = "{{$course -> start_by}}">
   </div>
   <div>
        <label for ="end_by">End By</label>
        <input type ="text" name ="end_by" id ="end_by"value = "{{$course -> end_by}}">
   </div>

</div>
<br>
  <input type ="submit" value="Edit">
</form>
</div>
 @endsection


