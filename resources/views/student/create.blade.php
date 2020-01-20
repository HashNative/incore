@extends('Layouts.master')
@section('content')
<div>
<div class ="text-right">
  
  <a href ="{{URL::previous()}}" class="btn btn-success btn-rounded" href="#"style ="width:100px">Back</a>
</div>
<br>

    <form action ="{{route('student.store')}}" method = "post">
     {{csrf_field()}}
    <div class ="row">

        <div class ="col-md-6"> 
        
            <label for ="student_name">Student Name</label> 
        
            <input type ="text" name ="student_name" id ="student_name"class ="form-control" autofocus placeholder="Enter the Student Name">
        </div>
    <div class ="col-md-6"> 
        
        <label for ="status">Status</label>
        <input type ="text" name ="status" id ="status" class ="form-control" maxlength="8" placeholder="Enter the Status">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="address">Address</label>
        <input type ="text" name ="address" id ="address" class ="form-control" maxlength="8" placeholder="Enter the address">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="email_id">Email Id</label>
        <input type ="text" name ="email_id" id ="email_id" class ="form-control" maxlength="8" placeholder="Enter the Email Id">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="phone_number">Phone Number</label>
        <input type ="text" name ="phone_number" id ="phone_number" class ="form-control" maxlength="8" placeholder="Enter the Phone Number">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="course_id">Course Id</label>
        <input type ="text" name ="course_id" id ="course_id" class ="form-control" maxlength="8" placeholder="Enter the Course Id">
    </div> 
    </div>
    <br>
    <input type ="submit" class ="btn btn-success btn-rounded" value="Create">
    </form>
    </div>
@endsection







