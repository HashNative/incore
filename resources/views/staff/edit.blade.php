@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('staff.index')}}">staff</a></li>
              <li class="breadcrumb-item">edit</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
<div>

<form action = "{{route('staff.update',$staff->id)}}" method = "POST">
  <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
     <div class="d-flex justify-content-center">
     <div class ="col-md-8"> 
     <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Staff </h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
<div class ="row">
    <div class ="col-md-6"> 
        <label for ="staff_id">Staff Id</label> 
        <input type ="text" name ="staff_id" id ="staff_id" value = "{{$staff -> staff_id}}"class="form-control">
    </div>
    <div  class ="col-md-6">
        <label for ="staff_name">Staff Name</label>
        <input type ="text" name ="staff_name" id ="staff_name"value = "{{$staff -> staff_name}}"class="form-control" >
        
   </div>
   <div  class ="col-md-6">
        <label for ="languages">Language</label>
        <input type ="text" name ="languages" id ="languages"value = "{{$staff -> languages}}"class="form-control" >
   </div>
   <div  class ="col-md-6">
        <label for ="mobile_number">Mobile Number</label>
        <input type ="number" name ="mobile_number" id ="mobile_number"value = "{{$staff -> mobile_number}}"class="form-control">    
        </div>




   <div  class ="col-md-12">
        <label for ="password">Password</label>
        <input type ="text" name ="password" id ="password"value = "{{$staff -> password}}"class="form-control">

</div>
        

        

            
<br>

<input type ="submit"  value="Save" class="btn btn-success float-right">     

<a href ="{{URL::previous()}}" class="btn bg-gradient-primary " href="#">Back</a>
  
</form>
</div>



 @endsection


