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
              <li class="breadcrumb-item">addstaff</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
<div>
<div >
  
</div>

    <form action ="{{route('staff.store')}}" method = "post">
     {{csrf_field()}}
    <div >
    <div class="d-flex justify-content-center">
    <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Staff </h3>
              </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form role="form">
                  <div class="row">
            
            <div class ="col-md-6">
            <div class="from-group"> 
            <label for ="staff_id">Staff Id</label> 
            <input type ="text" name ="staff_id" id ="staff_id" autofocus placeholder="Enter the Staff Id"class="form-control">
        </div>
        </div>
        <div class ="col-md-6">
        <div class="from-group"> 
        <label for ="staff_name">Staff Name</label>
        <input type ="text" name ="staff_name" id ="staff_name"  placeholder="Enter the Staff Name"class="form-control">
    </div> 
    </div>

    <div class ="col-md-6">
    <div class="from-group"> 
        <label for ="email">email</label>
        <input type ="text" name ="email" id ="email" placeholder="Enter the email"class="form-control">
    </div> 
    </div>
  
        <div class ="col-md-6"> 
        <div class="from-group">
        <label for ="languages">Language</label>
        <select type ="text" name ="languages" id ="languages" class="form-control" >
        <option>select laguage</option>
        <option value="english">English</option>
        <option value="tamil">Tamil</option>
        <option value="sinhala">Sinhala</option></select>
    </div> 
    </div> 
  
        <div class ="col-md-6"> 
        <div class="from-group">
        <label for ="mobile_number">Mobile Number</label>
        <input type ="number" name ="mobile_number" id ="mobile_number"   placeholder="Enter the mobile number"class="form-control">
        <br>
        
    </div> 
    </div> 
    
 
        <div class ="col-md-6"> 
        <div class="from-group">
        <label for ="password">Password</label>
        <input type ="password" name ="password" id ="password"   placeholder="Enter password"class="form-control">
        </div>
        </div>
    
           
</from>
</div>

   
<div class="card-footer">
<a href ="{{URL::previous()}}" class="btn bg-gradient-primary float-left " href="#">Back</a> 
<button type ="submit"  value="Save" class="btn btn-success float-right">Save </button>    

    
</div>
    </div>
@endsection







