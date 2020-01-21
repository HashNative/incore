@extends('layouts.master')
@section('content')
<div>
<div >
  
  <a href ="{{URL::previous()}}" >Back</a>
</div>
<br>

    <form action ="{{route('course.store')}}" method = "post">
     {{csrf_field()}}
    <div>

    <div> 
        
            <label for ="course_id">Course ID</label> 
        
            <input type ="text" name ="course_id" id ="course_id" autofocus placeholder="Enter the Course ID">
        </div>
    <div > 
        
        <label for ="course_name">Course Name</label>
        <input type ="text" name ="course_name" id ="course_name"  maxlength="100" placeholder="Enter the Course Name">
    </div> 
    <div > 
        
            <label for ="registration_date">Registraion Date</label> 
        
            <input type ="date" name ="registration_date" id ="registration_date" autofocus placeholder="Enter the Registration Date">
        </div>
        <div> 
        
            <label for ="course_fees">Course Fees</label> 
        
            <input type ="number" name ="course_fees" id ="course_fees" autofocus placeholder="Enter the Course Fees">
        </div>
        <div> 
        
            <label for ="description">Description</label> 
        
            <input type ="text" name ="description" id ="description" autofocus placeholder="Enter the Description">
        </div>
        <div> 
        
            <label for ="start_by">Start By</label> 
        
            <input type ="date" name ="start_by" id ="start_by"  autofocus placeholder="Enter the Start Date">
        </div>
        <div> 
        
            <label for ="end_by">End By</label> 
        
            <input type ="date" name ="end_by" id ="end_by" autofocus placeholder="Enter the End Date">
        </div>
    </div>
    <br>
    <input type ="submit"  value="Create">
    </form>
    </div>
@endsection







