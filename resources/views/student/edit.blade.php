@extends('layouts.master')
@section('content')
<html >
<head>
    
</head>
<body>
    

<div>

<form action = "{{route('student.update',$student->id)}}" method = "POST">
  <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
<div >
    <div > 
        <label for ="student_name">Student Name</label> 
        <input type ="text" name ="student_name" id ="student_name" value = "{{$student ->student_name}}">
    </div>
    <div > 
        <label for ="status">Status</label> 
        <input type ="text" name ="status" id ="status" value = "{{$student ->status}}">
    </div>
    <div > 
        <label for ="email_id">Email Id</label> 
        <input type ="text" name ="email_id" id ="email_id" value = "{{$student ->email_id}}">
    </div>
    <div > 
        <label for ="address">Address</label> 
        <input type ="text" name ="address" id ="address" value = "{{$student ->address}}">
    </div>
    <div > 
        <label for ="phone_number">Phone Number</label> 
        <input type ="text" name ="phone_number" id ="phone_number" value = "{{$student ->phone_number}}">
    </div>
    <div > 
        <label for ="course_id">Course Id</label> 
        <input type ="text" name ="course_id" id ="course_id" value = "{{$student ->course_id}}">
    </div>
</div>
<br>
  <input type ="submit"  value="Save">
</form>
</div>
</body>
</html>
 @endsection


