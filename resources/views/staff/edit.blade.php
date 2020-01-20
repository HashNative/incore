@extends('layouts.master')
@section('content')
<div>

<form action = "{{route('staff.update',$staff->id)}}" method = "POST">
  <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
<div class ="row">
    <div class ="col-md-6"> 
        <label for ="staff_id">Staff Id</label> 
        <input type ="text" name ="staff_id" id ="staff_id" value = "{{$staff -> staff_id}}"class ="form-control">
    </div>
    <div  class ="col-md-6">
        <label for ="staff_name">Staff Name</label>
        <input type ="text" name ="staff_name" id ="staff_name"value = "{{$staff -> staff_name}}" class ="form-control">
   </div>
   <div  class ="col-md-6">
        <label for ="languages">Language</label>
        <input type ="text" name ="languages" id ="languages"value = "{{$staff -> languages}}" class ="form-control">
   </div>
   <div  class ="col-md-6">
        <label for ="mobile_number">Mobile Number</label>
        <input type ="number" name ="mobile_number" id ="mobile_number"value = "{{$staff -> mobile_number}}" class ="form-control">
   </div>

</div>
<br>
  <input type ="submit" class ="btn btn-success btn-rounded" value="Edit">
</form>
</div>
 @endsection


