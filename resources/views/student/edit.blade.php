@extends('layouts.master')
@section('content')
<html >
<head>
    
</head>
<body>
    <br>
    <form role="form" action = "{{route('student.update',$student->id)}}" method = "POST"  >
    <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
            
                <div class=" d-flex justify-content-center  ">
                <div class=" col-8  ">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Student Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="student_name">Student Name</label> 
        <input type ="text" name ="student_name" class="form-control" id ="student_name" value = "{{$student ->student_name}}">
                  </div> 
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label for ="status">Status</label>
                        <select class="form-control" name ="status" id ="status" value = "{{$student ->status}}">
                          <option>Registered</option>
                          <option>Pending</option>
                          <option>Declined</option>
                          
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                    
                      <div class="form-group">
                  <label for ="email_id">Email Id</label> 
        <input type ="text" name ="email_id" id ="email_id" class="form-control"value = "{{$student ->email_id}}">
                  </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="address">Address</label> 
        <input type ="text" name ="address" id ="address" class="form-control" value = "{{$student ->address}}">
                  </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="phone_number">Phone Number</label> 
        <input type ="text" name ="phone_number" id ="phone_number" class="form-control" value = "{{$student ->phone_number}}">
                  </div>

                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="course_id">Course Id</label> 
        <input type ="text" name ="course_id" id ="course_id" class="form-control" value = "{{$student ->course_id}}">
                  </div>
                    </div>
                    
              </form>
              
                  </div>

                  <div class="card-footer">
                  <button type="submit" value="Save" class="btn bg-gradient-success float-right ">save</button>
                  <a href ="{{URL::previous()}}" class="btn bg-gradient-primary" href="#">Back</a>
                </div>
            

               




</body>
</html>
 @endsection


