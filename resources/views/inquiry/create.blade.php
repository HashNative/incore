@extends('layouts.master')
@section('content')
<div>
<div >
  
  <a href ="{{URL::previous()}}"href="#"style ="width:100px">Back</a>
</div>
<br>

    <form action ="{{route('inquiry.store')}}" method = "post">
     {{csrf_field()}}
    <div class ="row">

        
    <div class ="col-md-6"> 
        
        <label for ="source">Source</label>
        <input type ="text" name ="source" id ="source" placeholder="Enter the source">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="type">Type</label>
        <input type ="text" name ="type" id ="type" placeholder="Enter the type">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="description">Description</label>
        <input type ="text" name ="description" id ="description" placeholder="Enter the description">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="staff_id">Staff Id</label>
        <input type ="text" name ="staff_id" id ="staff_id"  placeholder="Enter the staff id">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="student_id">Student Id</label>
        <input type ="text" name ="student_id" id ="student_id"   placeholder="Enter the student id">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="date_time">Date Time</label>
        <input type ="text" name ="date_time" id ="date_time"   placeholder="Enter the date and time">
    </div> 
    </div>
    <br>
    <input type ="submit"  value="Create">
    </form>
    </div>
@endsection







