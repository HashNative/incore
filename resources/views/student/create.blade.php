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
              <li class="breadcrumb-item">Add student</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>

  <div class="d-flex justify-content-center">
    <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registration Form</h3>
              </div>
              <form role="form" action ="{{route('student.store')}}" method = "post">
                    {{csrf_field()}}
                    <div class="card-body">
                  <div class="row">
                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                        <label for ="student_name">Student Name</label>
                          
                            <input type="text" name="student_name" class="form-control" id="exampleInputStudent_name1" placeholder="Enter the Student Name"aria-describedby="exampleInputstudent_name-error" aria-invalid="true" required>
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

                  <div class="col-sm-7">

                    <div class="form-group">
                     <label for ="course_name">Course Name</label>
                          <select type ="text" name ="course_name" id="course_name"  class="form-control"class="required"onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;" >

                               @foreach ($courses as $course)
                                <option >{{$course->course_name}}</option>
                                @endforeach</select>

                        </div>
                      </div>
                    <div class="col-sm-5">
                    <div class="form-group">
                    <label for ="phone_number">Phone Number</label>
                            <input type ="integer" name ="phone_number"class="form-control" pattern="[077][0-9]{9}" id="exampleInput0111234567" placeholder="Enter the Phone Number" maxlength="10" pattern="[0-9]{1}[0-9]{9}"  aria-describedby="exampleInputphone_number-error" aria-invalid="true" required>
                      </div>
                    </div>

                     <div class="col-sm-7">

                    <div class="form-group">
                    <label for="email_id">Email</label>
                        <input type="email" name="email_id" class="form-control" id="exampleInputemail_id1" placeholder="Enter your email" aria-describedby="exampleInputEmail1-error" aria-invalid="true"required>
                      </div>
                    </div>

                    
                   
                  </div>

                  <div class="row">
                    <div class="col-sm-4">
                     
                      <div class="form-group">
                      <label for ="inquiry_by">Inquiry by</label>
                      <select type ="text" name ="inquiry_by" id="inquiry_by" class="form-control"class="required" >
                    @foreach ($staffs as $staff)
                      <option >{{$staff->name}}</option>
                      @endforeach</select>

                      </div>
                    </div>
                 
                    <div class="col-sm-4">
                      <div class="form-group">
                      <label for ="inquiry_source">Inquiry source</label>
                      <select type="text" name ="inquiry_source" id="inquiry_source" class="form-control" class="form-control" class="required">
                            
                            <option selected>Call</option>
                            <option >Walk In</option>
                            <option >Others</option></select>
                      </div>
                    </div>

                    <div class="col-sm-4">
                     
                     <div class="form-group">
                     <label for ="transfer">Transfer</label>
                           <select type="text" name ="transfer" id="transfer" class="form-control" class="form-control" class="required">
                           
                           <option value = "Yes" selected>Yes</option>
                           <option value = "no">No</option><select>
                     </div>
                   </div>
                  </div>


                  <div class="row">
                   
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
                            <option >Others</option><select>
                      </div>
                    </div>

                    <div class="col-sm-5">

                      <div class="form-group">
                      <label for="date">Date</label>
                        <input type ="date" name ="date" id="exampleInputdate1"  class="form-control"  placeholder="Enter the date"aria-describedby="exampleInputdate-error" aria-invalid="true" required></span>
                            
                      </div>
                    </div>

</form>
                   </div>
     
                    <div class="card-footer">
                          <input type ="submit"class=" float-right btn bg-gradient-success " value="register">
                          <a href ="{{URL::previous()}}" class="btn bg-gradient-primary ">Back</a>
                    </div>

                  </div>
            </div>

                 
            <form>
  
    
@endsection


</body>
</html>




