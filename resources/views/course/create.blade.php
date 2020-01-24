@extends('layouts.master')
@section('content')
<section class="content">
  <form action ="{{route('course.store')}}" method = "post" role="form">
  {{csrf_field()}}
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="d-flex justify-content-center">
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Course</h3>
              </div>

         <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                     <div class="form-group">
                      <label for ="course_id">Course ID</label>
                       <input type="text" class="form-control"name ="course_id" id="course_id" placeholder="Enter the Course ID">
           </div>
           </div>
           <div class="col-sm-6">
             <div class="form-group">
                 <label for ="course_name">Course Name</label>
                 <input type ="text" name ="course_name" id ="course_name" class="form-control" maxlength="100" placeholder="Enter the Course Name">
    </div> 
    </div>
    <div class="col-sm-6">
    <div class="form-group"> 
         <label for ="registration_date">Registraion Date</label> 
         <input type ="date" name ="registration_date" id ="registration_date" class="form-control" autofocus placeholder="Enter the Registration Date">
    </div>
    </div>
        <div class="col-sm-6">
        <div class="form-group"> 
            <label for ="course_fees">Course Fees</label> 
            <input type ="number" name ="course_fees" id ="course_fees"class="form-control" autofocus placeholder="Enter the Course Fees">
        </div>
        </div>
        
        <div class="col-sm-6">
        <div class="form-group"> 
        
            <label for ="start_by">Start By</label> 
        
            <input type ="date" name ="start_by" id ="start_by" class="form-control" autofocus placeholder="Enter the Start Date">
        </div>
        </div>
        <div class="col-sm-6">
        <div class="form-group"> 
        
            <label for ="end_by">End By</label> 
        
            <input type ="date" name ="end_by" id ="end_by" class="form-control" autofocus placeholder="Enter the End Date">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group"> 
            <label for ="description">Description</label> 
            <textarea name="description" id ="description" class="form-control" autofocus placeholder="Enter the Description"></textarea>
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

