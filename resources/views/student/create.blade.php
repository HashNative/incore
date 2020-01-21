@extends('Layouts.master')
@section('content')
<div>
<div >
  
  <a href ="{{URL::previous()}}"  href="#">Back</a>
</div>
<br>

    <form action ="{{route('student.store')}}" method = "post">
     {{csrf_field()}}
    <div >

        <div > 
        
            <label for ="student_name">Student Name</label> 
        
            <input type ="text" name ="student_name" id ="student_name" autofocus placeholder="Enter the Student Name">
        </div>
    <div > 
        
        <label for ="status">Status</label>
        <input type ="text" name ="status" id ="status"  maxlength="8" placeholder="Enter the Status">
    </div> 
    <div > 
        
        <label for ="address">Address</label>
        <input type ="text" name ="address" id ="address" maxlength="8" placeholder="Enter the address">
    </div> 
    <div > 
        
        <label for ="email_id">Email Id</label>
        <input type ="text" name ="email_id" id ="email_id"  maxlength="8" placeholder="Enter the Email Id">
    </div> 
    <div > 
        
        <label for ="phone_number">Phone Number</label>
        <input type ="text" name ="phone_number" id ="phone_number"  maxlength="8" placeholder="Enter the Phone Number">
    </div> 
    <div > 
        
        <label for ="course_id">Course Id</label>
        <input type ="text" name ="course_id" id ="course_id"  maxlength="8" placeholder="Enter the Course Id">
    </div> 
    </div>
    <br>
    <input type ="submit" value="Create">
    </form>
    </div>
@endsection







