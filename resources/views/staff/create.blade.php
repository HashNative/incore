@extends('layouts.master')
@section('content')
<div>
<div class ="text-right">
  
  <a href ="{{URL::previous()}}" class="btn btn-success btn-rounded" href="#"style ="width:100px">Back</a>
</div>
<br>

    <form action ="{{route('staff.store')}}" method = "post">
     {{csrf_field()}}
    <div class ="row">

        <div class ="col-md-6"> 
        
            <label for ="staff_id">Staff Id</label> 
        
            <input type ="text" name ="staff_id" id ="staff_id"class ="form-control" autofocus placeholder="Enter the Staff Id">
        </div>
    <div class ="col-md-6"> 
        
        <label for ="staff_name">Staff Name</label>
        <input type ="text" name ="staff_name" id ="staff_name" class ="form-control" placeholder="Enter the Staff Name">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="languages">Language</label>
        <input type ="text" name ="languages" id ="languages" class ="form-control" placeholder="Enter the language">
    </div> 
    <div class ="col-md-6"> 
        
        <label for ="mobile_number">Mobile Number</label>
        <input type ="number" name ="mobile_number" id ="mobile_number" class ="form-control"  placeholder="Enter the mobile number">
    </div> 
    </div>
    <br>
    <input type ="submit" class ="btn btn-success btn-rounded" value="Create">
    </form>
    </div>
@endsection







