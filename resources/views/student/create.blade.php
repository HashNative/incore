@extends('Layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('student.index')}}">Student</a></li>
              <li class="breadcrumb-item">Add student</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>

              <div class="d-flex justify-content-center">
                <div class="col-md-8">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title"><b>Registration Form</b></h3>
                    </div>
                    
                        <form role="form" action ="{{route('student.store')}}" method = "post">
                              {{csrf_field()}}
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for ="student_name">Student Name</label>
                                          
                                            <input type="text" name="student_name" class="form-control" autocomplete="student_name" id="exampleInputStudent_name1" placeholder="Enter the Student Name"aria-describedby="exampleInputstudent_name-error" aria-invalid="true" required>
                                      </div>
                                    </div>
                                  
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label for ="course_name">Course Name</label>
                                            <select type ="text" name ="course_name" id="course_name"  class="form-control"class="required"onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;" >

                                            @foreach ($courses as $course)
                                              <option >{{$course->course_name}}</option>
                                              @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                    <div class="form-group">
                                      <label>Phone number</label>
                                      <input type="text" name="phone_number" maxlength="10" id="exampleInputsource1" class="form-control" id ="phone_number" pattern="(0){1}[0-9]{9}" autocomplete="phone_number" placeholder="Enter the Phone number" aria-describedby="exampleInputsource-error" aria-invalid="true" required>

                                    </div>
                                    </div>
                                   
                                    <div class="col-sm-7">
                                      <div class="form-group">
                                        <label for="email_id">Email</label>
                                        <input type="email" name="email_id" class="form-control" autocomplete="email_id" id="exampleInputemail_id1" placeholder="Enter your email" aria-describedby="exampleInputEmail1-error" aria-invalid="true"required>
                                      </div>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for ="inquiry_source">Inquiry source</label>
                                        <select type="text" name ="inquiry_source" id="inquiry_source" class="form-control" class="form-control" class="required">
                                          
                                          <option selected>Call</option>
                                          <option >Walk In</option>
                                          <option >Others</option>
                                        </select>
                                    </div>
                                  </div>

                                  <div class="col-sm-4">
                                        <div class="form-group">
                                          <label for ="transfer">Transfer</label>
                                          <select type="text" name ="transfer" id="transfer" class="form-control" class="form-control" class="required">
                                        
                                            <option value = "Yes" selected>Yes</option>
                                            <option value = "no">No</option>
                                          <select>
                                        </div>
                                  </div>

                                  <div class="col-sm-4">
                                    <div class="form-group">
                                      <label  for ="source">Source</label>
                                      <select type="text"  name ="source" id="source" class="form-control" class="form-control" class="required" >
                                          
                                          <option  selected>Call</option>
                                          <option >Walk In</option>
                                          <option >Web</option>
                                          <option >From Cordinator</option>
                                          <option >From student</option>
                                          <option >From Branch</option>
                                          <option >Others</option>
                                      <select>
                                    </div>
                                  </div>
                                
                               
                                </div>
                              </div>
                              <div class="card-footer">
                                 <input type ="submit"class=" float-right btn bg-gradient-success " value="register">
                                 <a href ="{{URL::previous()}}" class="btn bg-gradient-primary ">Back</a>
                              </div>
                        </form>
                    
                    

                  </div>
                </div>
              </div>
              
@endsection




