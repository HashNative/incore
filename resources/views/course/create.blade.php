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
              <li class="breadcrumb-item active"><a href="{{route('course.index')}}">course</a></li>
              <li class="breadcrumb-item">Add course</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
<section class="content">
  <form action ="{{route('course.store')}}" method = "post" role="form">
  {{csrf_field()}}
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="d-flex justify-content-center">
          <div class="col-md-8 ">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Create Course</b></h3>
              </div>

         <div class="card-body">
                <form role="form">
                  <div class="row">
           
           <div class="col-sm-8">
             <div class="form-group">
                 <label for ="course_name">Course Name</label>
                 <input type ="text" name ="course_name" id ="course_name" autocomplete="off" class="form-control" maxlength="100" placeholder="Enter the Course Name"id="exampleInputCourse_name1"aria-describedby="exampleInputcourse_name-eror" airia-invalid="true" required>
    </div> 
    </div>
    <div class="col-sm-4">
    <div class="form-group"> 
         <label for ="registration_date">Registraion Date</label> 
         <input type ="date" name ="registration_date" id ="registration_date" class="form-control" autofocus placeholder="Enter the Registration Date"id="exampleInputRegistration_date1"aria-describedby="exampleInputregistration_date-eror" airia-invalid="true" required>
    </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group"> 
        
            <label for ="start_by">Start By</label> 
        
            <input type ="date" name ="start_by" id ="start_by" class="form-control" autofocus placeholder="Enter the Start Date"id="exampleInputStart_by1"aria-describedby="exampleInputstart_by-eror" airia-invalid="true" required>
        </div>
        </div>
        <div class="col-sm-3">
        <div class="form-group"> 
        
            <label for ="end_by">End By</label> 
        
            <input type ="date" name ="end_by" id ="end_by" class="form-control" autofocus placeholder="Enter the End Date"id="exampleInputEnd_by1"aria-describedby="exampleInputend_by-eror" airia-invalid="true" required>
        </div>
    </div>
        <div class="col-sm-6">
        <div class="form-group"> 
            <label for ="course_fees">Course Fees</label> 
            <input type ="number" name ="course_fees" id ="course_fees"class="form-control" autofocus placeholder="Enter the Course Fees"id="exampleInputCourse_fees1"aria-describedby="exampleInputcourse_fees-eror" airia-invalid="true" required>
        </div>
        </div>
        
       
        <div class="col-sm-12">
        <div class="form-group"> 
            <label for ="description">Description</label> 
            <textarea name="description" id ="description" class="form-control" autofocus placeholder="Enter the Description"id="exampleInputDescription1"aria-describedby="exampleInputdescription-eror" airia-invalid="true" required></textarea>
        </div>
        </div>
     
   
        </div>
    <div class="card-footer">
      <input type ="submit" class="btn btn-success float-right" value="Create">
      <a href ="{{URL::previous()}}" class="btn btn-primary float-left" >Back</a>
    </div>
 </form>
</div>
@endsection

