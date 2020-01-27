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
              <li class="breadcrumb-item active"><a href="{{route('student.index')}}">student</a></li>
              <li class="breadcrumb-item">addstudent</li>
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
                        <input type ="text" name ="student_id" id="exampleInputstudent_id1" class="form-control"autofocus placeholder="Enter the Student Id"aria-describedby="exampleInputstudent_id-error" aria-invalid="true" required>
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
                          
                            <input type="text" name="student_name" class="form-control" id="exampleInputStudent_name1" placeholder="Enter the Student Name"aria-describedby="exampleInputstudent_name-error" aria-invalid="true" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email_id">Email Id</label>
                        <input type="email" name="email_id" class="form-control" id="exampleInputemail_id1" placeholder="Enter your email" aria-describedby="exampleInputEmail1-error" aria-invalid="true"required>
                      </div>
                    </div>


                    <div class="col-sm-6">

                    <div class="form-group">
                    <label for ="phone_number">Phone Number</label>
                            <input type ="text" name ="phone_number"class="form-control" id="exampleInputphone_number1" placeholder="Enter the Phone Number" aria-describedby="exampleInputphone_number-error" aria-invalid="true" required>
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-sm-6">
                     
                      <div class="form-group">
                        <label for ="register_by">Registered by</label>
                        <input type ="text" name ="register_by" id="exampleInputregister_by1" class="form-control"placeholder="Enter the Register  by"aria-describedby="exampleInputregister_by-error" aria-invalid="true" required>
                      </div>
                    </div>
                 
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for ="course_name">Course Name</label>
                            <input type ="text" name ="course_name" id="exampleInputcourse_name1"  class="form-control"  placeholder="Enter the Course name"aria-describedby="exampleInputcourse_name-error" aria-invalid="true" required>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-sm-6">
                     
                      <div class="form-group">
                        <label for ="inquiry_by">Inquiry by</label>
                        <input type ="text" name ="inquiry_by" id="exampleInputinquiry_by1" class="form-control"  placeholder="Enter the Inquriy by"aria-describedby="exampleInputinquiry_by-error" aria-invalid="true" required>
                      </div>
                    </div>
                 
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for ="inquiry_source">Inquiry source</label>
                            <input type ="text" name ="inquiry_source" id="exampleInputinquiry_source1" class="form-control"  placeholder="Enter the Inquiry source"aria-describedby="exampleInputinquiry_source-error" aria-invalid="true" required>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                  <div class="col-sm-6">

                      <div class="form-group">
                       <label for ="transfer">Transfer</label>
                            <select type="text" name ="transfer" id="transfer" class="form-control" class="form-control" class="required">
                            
                            <option value = "Yes" selected>Yes</option>
                            <option value = "no">No</option><select>
                      </div>
                    </div>
                 
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for ="source">Source</label>
                            <input type ="text" name ="source" id="exampleInputsource1"  class="form-control"  placeholder="Enter the Source"aria-describedby="exampleInputsource-error" aria-invalid="true" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-6">

                  <div class="form-group">
                  <span data-automation-id="SEL_ERR">
                      <label for="date">Date</label>
                        <input type ="date" name ="date" id="exampleInputdate1"  class="form-control"  placeholder="Enter the date"aria-describedby="exampleInputdate-error" aria-invalid="true" required></span>
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




