@extends('layouts.master')
@section('content')
<section class="content">
  <form action = "{{route('course.update',$course->id)}}" method = "POST">
     <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
       <div class="d-flex justify-content-center">
       <div class="col-md-8">
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Course</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">

                    <div class="form-group">
                        <label for ="course_id">Course ID</label> 
                        <input type ="text" name ="course_id" id ="course_id" class="form-control" value = "{{$course -> course_id}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for ="course_name">Course Name</label>
                      <input type ="text" name ="course_name" id ="course_name"class="form-control"value = "{{$course -> course_name}}"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                   <div class="form-group">
                          <label for ="registration_date">Registraion Date</label>
                          <input type ="date" name ="registration_date" id ="registration_date"class="form-control"value = "{{$course -> registration_date}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <label for ="course_fees">Course Fees</label>
                          <input type ="number" name ="course_fees" id ="course_fees"class="form-control"value = "{{$course -> course_fees}}">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                <div class="col-sm-6">
                 <div class="form-group">
                        <label for ="start_by">Start By</label>
                        <input type ="date" name ="start_by" id ="start_by"class="form-control"value = "{{$course -> start_by}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                          <label for ="end_by">End By</label>
                          <input type ="date" name ="end_by" id ="end_by"class="form-control"value = "{{$course -> end_by}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                         <label for ="description">Description</label>
                         <input type ="textarea" name ="description" id ="description"class="form-control"value = "{{$course -> description}}"></textarea>
                      </div>
                    </div>
                  </div>
               </div>
                    

    
    
<div class="card-footer">
                  <button type="submit" class="btn bg-gradient-success float-right">Save</button>
                  <a href ="{{URL::previous()}}" class="btn bg-gradient-primary float-left">Back</a>
</div>
</form>
</div>
 @endsection


