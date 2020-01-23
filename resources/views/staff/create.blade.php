@extends('layouts.master')
@section('content')
<div>
<div >
  
</div>

    <form action ="{{route('staff.store')}}" method = "post">
     {{csrf_field()}}
    <div >
    <div class="d-flex justify-content-center">
    <div class="col-md-8">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add Staff </h3>
              </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form role="form">
                  <div class="row">
            
            
            <div class ="row">
            <div class ="col-md-6"> 
            <label for ="staff_id">Staff Id</label> 
            <input type ="text" name ="staff_id" id ="staff_id" autofocus placeholder="Enter the Staff Id"class="form-control">
        </div>
        <div class ="col-md-6"> 
        <label for ="staff_name">Staff Name</label>
        <input type ="text" name ="staff_name" id ="staff_name"  placeholder="Enter the Staff Name"class="form-control">
    </div> 
    
        <div class ="col-md-6"> 
        <label for ="languages">Language</label>
        <input type ="text" name ="languages" id ="languages" placeholder="Enter the language"class="form-control">
    </div> 
  
        <div class ="col-md-6"> 
        <label for ="mobile_number">Mobile Number</label>
        <input type ="number" name ="mobile_number" id ="mobile_number"   placeholder="Enter the mobile number"class="form-control">
    </div> 
    
 
        <div class ="col-md-12"> 
        <label for ="password">Password</label>
        <input type ="number" name ="password" id ="password"   placeholder="Enter password"class="form-control">
    
    <br>

    <input type ="submit"  value="Create"class="btn btn-success float-right">
    <a href ="{{URL::previous()}}" class="btn bg-gradient-primary " href="#">Back</a>
</div>
    </div>
@endsection







