@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('staff.index')}}">Staff</a></li>
              <li class="breadcrumb-item">Add Staff</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
<div>
<div >
  
</div>

    <form action ="{{ route('staff.store') }}" method = "post">
     {{csrf_field()}}
    <div >
    <div class="d-flex justify-content-center">
    <div class="col-sm-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Staff </h3>
              </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form role="form">
                  <div class="row">
            
        
    <div  class ="col-md-8">
    <div class="from-group">
        <label for ="name">Staff Name</label>
        <input type ="text" name ="name" id="exampleInputsource1"  id ="name"  placeholder="Enter the Staff Name"class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
    </div> 
    </div>

    <div  class ="col-md-4">
    <div class="from-group"> 
        <label for ="email">Email</label>
        <input type ="email" name ="email" id="exampleInputsource1"  id ="email" placeholder="Enter the email"class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
    
    </div> 
    </div>
  

        <div class ="col-sm-6"> 
        <div class="from-group">
        <label for ="languages">Language</label>
        <select type ="text" name ="languages" id ="languages" class="form-control" >
        <option value="English" selected >English</option>
        <option value="Tamil">Tamil</option>
        <option value="Sinhala">Sinhala</option></select>
    </div> 
    </div> 
    
    <div class ="col-sm-8">
    <div class="from-group"> 
        <label for ="email">Email</label>
        <input type ="email" name ="email" id="exampleInputsource1"  id ="email" placeholder="Enter the email"class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
    </div> 
    </div>

    <div class ="col-sm-4"> 
        <div class="from-group">
        <label for ="mobile_number">Mobile Number</label>
        <input type ="integer" name ="mobile_number"  maxlength="13"id="exampleInputsource1"  id ="mobile_number"   placeholder="Enter the mobile number  "class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
        
        
    </div> 
    </div> 
 
        <div class ="col-sm-6"> 
        <div class="from-group">
        <label for ="password">Password</label>
        <input type ="text" name ="password" id="exampleInputsource1" id ="password"   placeholder="Enter password  "class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required >
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

