@extends('Layouts.master')
@section('content')
<html>
<head>
    
</head>
<body><BR>

    <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registration Form</h3>
              </div>
              <form role="form" action ="{{route('student.store')}}" method = "post">
                    {{csrf_field()}}
                    <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Student Name</label>
                        <input type ="text" name ="student_name" id ="student_name" class="form-control"autofocus placeholder="Enter the Student Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <b>Status<b>
                            <select type="text" name ="status" id ="status" class="form-control" class="form-control">
                            <option >Select status </option>
                            <option value = "Registered">Registered</option>
                            <option value = "Pending">Pending</option>
                            <option value = "Declined">Declined</option>
                            </select>
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                     
                      <div class="form-group">
                        <label>Email Id</label>
                        <input type ="text" name ="email_id" id ="email_id" class="form-control" maxlength="8" placeholder="Enter the Email Id">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Address</label>
                        <input type ="text" name ="address" id ="address"class="form-control" maxlength="8" placeholder="Enter the address">
                      </div>
                    </div>

                   
                    <div class="col-sm-6">

                    <div class="form-group">
                    <label for ="phone_number">Phone Number</label>
                            <input type ="text" name ="phone_number"class="form-control" id ="phone_number"  maxlength="8" placeholder="Enter the Phone Number">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for ="course_id">Course Id</label>
                            <input type ="text" name ="course_id" id ="course_id"  class="form-control" maxlength="8" placeholder="Enter the Course Id">
                      </div>
                    </div>
                    </div>
                    
                    <div class="card-footer">
                          <input type ="submit"class=" float-right btn bg-gradient-success " value="register">
                          <a href ="{{URL::previous()}}" class="btn bg-gradient-primary ">Back</a>
                    </div>

                  </div>


                 
    
    
@endsection


</body>
</html>




