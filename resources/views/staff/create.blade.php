@extends('layouts.master')
@section('content')
<div>
<div >
  
  <a href ="{{URL::previous()}}"  href="#">Back</a>
</div>
<br>

    <form action ="{{route('staff.store')}}" method = "post">
     {{csrf_field()}}
    <div >

        <div > 
        
            <label for ="staff_id">Staff Id</label> 
        
            <input type ="text" name ="staff_id" id ="staff_id" autofocus placeholder="Enter the Staff Id">
        </div>
    <div > 
        
        <label for ="staff_name">Staff Name</label>
        <input type ="text" name ="staff_name" id ="staff_name"  placeholder="Enter the Staff Name">
    </div> 
    <div > 
        
        <label for ="languages">Language</label>
        <input type ="text" name ="languages" id ="languages" placeholder="Enter the language">
    </div> 
    <div > 
        
        <label for ="mobile_number">Mobile Number</label>
        <input type ="number" name ="mobile_number" id ="mobile_number"   placeholder="Enter the mobile number">
    </div> 
    </div>
    <br>
    <input type ="submit"  value="Create">
    </form>
    </div>
@endsection







