@extends('layouts.master')
@section('content')
<div>
<div class ="text-right">
  
  <a href ="{{URL::previous()}}" class="btn btn-success btn-rounded" href="#"style ="width:100px">Back</a>
</div>
<br>

    <form action ="{{route('course.store')}}" method = "post">
     {{csrf_field()}}
    <div class ="row">

    <div class ="col-md-6"> 
        
            <label for ="course_id">Course ID</label> 
        
            <input type ="text" name ="course_id" id ="course_id"class ="form-control" autofocus placeholder="Enter the Course ID">
        </div>
    <div class ="col-md-6"> 
        
        <label for ="course_name">Course Name</label>
        <input type ="text" name ="course_name" id ="course_name" class ="form-control" maxlength="100" placeholder="Enter the Course Name">
    </div> 
    <div class ="col-md-6"> 
        
            <label for ="registration_date">Registraion Date</label> 
        
            <input type ="date" name ="registration_date" id ="registration_date"class ="form-control" autofocus placeholder="Enter the Registration Date">
        </div>
        <div class ="col-md-6"> 
        
            <label for ="course_fees">Course Fees</label> 
        
            <input type ="number" name ="course_fees" id ="course_fees"class ="form-control" autofocus placeholder="Enter the Course Fees">
        </div>
        <div class ="col-md-6"> 
        
            <label for ="description">Description</label> 
        
            <input type ="text" name ="description" id ="description"class ="form-control" autofocus placeholder="Enter the Description">
        </div>
        <div class ="col-md-6"> 
        
            <label for ="start_by">Start By</label> 
        
            <input type ="date" name ="start_by" id ="start_by" class ="form-control" autofocus placeholder="Enter the Start Date">
        </div>
        <div class ="col-md-6"> 
        
            <label for ="end_by">End By</label> 
        
            <input type ="date" name ="end_by" id ="end_by"class ="form-control" autofocus placeholder="Enter the End Date">
        </div>
    </div>
    <br>
    <input type ="submit" class ="btn btn-success btn-rounded" value="Create">
    </form>
    </div>
@endsection







