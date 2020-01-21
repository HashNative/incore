@extends('layouts.master')
@section('content')
<div>
<div class ="text-right">
  
  <a href ="{{URL::previous()}}" class="btn btn-success btn-rounded" href="#"style ="width:100px">Back</a>
</div>
<br>

    <form action ="{{route('inquiry.store')}}" method = "post">
     {{csrf_field()}}
    <div class ="row">

        
    <div class ="col-md-6"> 
        
        <label for ="source">Source</label>
        <input type ="text" name ="source" id ="source" class ="form-control" placeholder="Enter the source">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="type">Type</label>
        <input type ="text" name ="type" id ="type" class ="form-control" placeholder="Enter the type">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="description">Description</label>
        <input type ="text" name ="description" id ="description" class ="form-control"  placeholder="Enter the description">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="staff_id">Staff Id</label>
        <input type ="text" name ="staff_id" id ="staff_id" class ="form-control"  placeholder="Enter the staff id">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="student_id">Student Id</label>
        <input type ="text" name ="student_id" id ="student_id" class ="form-control"  placeholder="Enter the student id">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="date_time">Date Time</label>
        <input type ="text" name ="date_time" id ="date_time" class ="form-control"  placeholder="Enter the date and time">
    </div> 
    </div>
    <br>
    <input type ="submit" class ="btn btn-success btn-rounded" value="Create">
    </form>
    </div>
@endsection







