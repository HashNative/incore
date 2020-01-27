@extends('Layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('student.index')}}">Student</a></li>
              <li class="breadcrumb-item">Add Student</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>

  <div class="d-flex justify-content-center">
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
                        <label>Student Id</label>
                        <input type ="text" name ="student_id" id ="student_name" class="form-control"autofocus placeholder="Enter the Student Id">
                      </div>
                    </div>
                    <!-- <div class="col-sm-6">
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
                  </div> -->

                  <div class="col-sm-6">

                    <div class="form-group">
                    <label for ="student_name">Student Name</label>
                            <input type ="text" name ="student_name"class="form-control" id ="student_name"   placeholder="Enter the Student Name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label for ="email_id">Email Id</label>
                        <input type ="text" name ="email_id" id ="email_id" class="form-control"  placeholder="Enter the Email Id">
                      </div>
                    </div>

                    <div class="col-sm-6">

                    <div class="form-group">
                    <label for ="phone_number">Phone Number</label>
                            <input type ="text" name ="phone_number"class="form-control" id ="phone_number"   placeholder="Enter the Phone Number">
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-sm-6">
                     
                      <div class="form-group">
                        <label for ="register_by">Register by</label>
                        <input type ="text" name ="register_by" id ="register_by" class="form-control"  placeholder="Enter the Email Id">
                      </div>
                    </div>
                 
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for ="course_name">Course Name</label>
                            <input type ="text" name ="course_name" id ="course_name"  class="form-control"  placeholder="Enter the Course name">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-sm-6">
                     
                      <div class="form-group">
                        <label for ="inquiry_by">Inquiry by</label>
                        <input type ="text" name ="inquiry_by" id ="inquiry_by" class="form-control"  placeholder="Enter the Inquriy by">
                      </div>
                    </div>
                 
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for ="inquiry_source">Inquiry source</label>
                            <input type ="text" name ="inquiry_source" id ="inquiry_source"  class="form-control"  placeholder="Enter the Inquiry source">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                  <div class="col-sm-6">

                      <div class="form-group">
                       <label for ="transfer">transfer</label>
                            <select type="text" name ="transfer" id ="transfer" class="form-control" class="form-control">
                            <option >Select status </option>
                            <option value = "Yes">Yes</option>
                            <option value = "no">No</option><select>
                      </div>
                    </div>
                 
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for ="source">Source</label>
                            <input type ="text" name ="source" id ="source"  class="form-control"  placeholder="Enter the Source">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-6">

                  <div class="form-group">
                        <label for="date">Date</label>
                        <input type ="date" name ="date" id ="date" class="form-control"  placeholder="Enter the date">
                      </div>
                    </div>
                    </div>
                    
                    <div class="card-footer">
                          <input type ="submit"class=" float-right btn bg-gradient-success " value="register">
                          <a href ="{{URL::previous()}}" class="btn bg-gradient-primary ">Back</a>
                    </div>

                  </div>
            </div>

                 
    
    
@endsection


</body>
</html>




