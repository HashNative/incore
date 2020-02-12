@extends('layouts.master')
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
              <li class="breadcrumb-item">Edit</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
    <form  role="form" action = "{{route('student.update',$student->id)}}" method = "POST" class="needs-validation" novalidate  >
    <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
            
                <div class=" d-flex justify-content-center  ">
                <div class=" col-6  ">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Student Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">



                  <div class="row">
                    <div class="col-sm-5">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="student_name">Student Name</label> 
        <input type ="text" name ="student_name" class="form-control" id ="student_name" value = "{{$student ->student_name}}" required>
        <div class="invalid-feedback">
        Please Enter valid username.
      </div>
        
                  </div> 
                    </div>
                    <div class="col-sm-7">
                    <div class="form-group">
                  <label for ="course_name">Course Name</label> 
                  <select type ="text" class="form-control"  name ="course_name" id ="course_name" value = "{{$student ->course_name}}"required onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;">
                
                  @foreach ($courses as $course)
                            <option <?php if(($student->course_name)=='{{$course->course_name}}'){ echo 'selected'; } ?>>{{ $course->course_name}}</option>
                            
                          @endforeach
                          
                      </select>
        
                    <div class="invalid-feedback">
                    Please Enter valid Course Name.
                  </div>
     
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-5">
                    
                      <div class="form-group">
                      <label for ="phone_number">Phone Number</label> 
                    <input type ="text" name ="phone_number" maxlength="10" id ="phone_number" pattern="[0-9]{1}[0-9]{9}"class="form-control" value = "{{$student ->phone_number}}"required>
                    <div class="invalid-feedback">
                    Please Enter valid Phone Number.
                  </div>
                
                  </div>
                    </div>

                    <div class="col-sm-7">
                    <div class="form-group">            
                    <label for ="email_id">Email</label> 
                    <input type ="text" name ="email_id" id ="email_id" class="form-control"   value = "{{$student ->email_id}}" required>
                    <div class="invalid-feedback">
                    Please Enter valid Email.
                  </div>
                   
                    
                
                  </div>

                    </div>


                    <div class="col-sm-4">
                    <div class="form-group">
                  <label for ="inquiry_by">Inquiry By</label> 
                  <select type ="text" class="form-control"  name ="inquiry_by" id ="inquiry_by"  value = "{{ $student->inquiry_by}}"required>
                 
                  @foreach ($staffs as $staff)
                            <option <?php if(($student->inquiry_by)=='{{$staff->name}}'){ echo 'selected'; } ?>>{{ $staff->name}}</option>
                            @endforeach
                          
                      </select>
                         
                         <div class="invalid-feedback">
                         Please Enter valid detail.
                </div>
               </div>
              </div>
                    
                    <div class="col-sm-4">
                    <div class="form-group">
                  <label for ="inquiry_source">Inquiry Source</label> 
                  <select type ="text" class="form-control" name ="inquiry_source" id ="inquiry_source" value = "{{$student ->inquiry_source}}"required>
                
                   
                        <option <?php if(($student->inquiry_source)=='Call'){ echo 'selected'; } ?>>Call</option>
                  <option <?php if(($student->inquiry_source)=='Walk In'){ echo 'selected'; } ?>>Walk In</option>
                    <option <?php if(($student->inquiry_source)=='Others'){ echo 'selected'; } ?>>Others</option>
                      </select>
                       
                        <div class="invalid-feedback">
                        Please Enter valid Inquiry Source.
              </div>
     
                  </div>

                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                        <label for ="transfer">Transfer</label> 
                          <select type ="text" class="form-control" name ="transfer" id ="transfer"  value = "{{$student ->transfer}}" required>
                          <option <?php if(($student->transfer)=='Yes'){ echo 'selected'; } ?>>Yes</option>
                          <option <?php if(($student->transfer)=='No'){ echo 'selected'; } ?>>No</option>
                             
                        </select>
                        <div class="invalid-feedback">
                        Please Enter valid value.
                  </div>
     
                      </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                  <label for ="source">Source</label> 
                  <select type ="text"  class="form-control" name ="source" id ="source" value = "{{$student ->source}}"required>
                  <option <?php if(($student->source)=='Call'){ echo 'selected'; } ?>>Call</option>
                  <option <?php if(($student->source)=='Walk In'){ echo 'selected'; } ?>>Walk In</option>
                  <option <?php if(($student->source)=='Web'){ echo 'selected'; } ?>>Web</option>
                  <option <?php if(($student->source)=='From Student'){ echo 'selected'; } ?>>From Student</option>
                  <option <?php if(($student->source)=='From Cordinator'){ echo 'selected'; } ?>>From Cordinator</option>
                  <option <?php if(($student->source)=='From Branch'){ echo 'selected'; } ?>>From Branch</option>
                  <option <?php if(($student->source)=='Offers'){ echo 'selected'; } ?>>Offers</option>
                          
                      </select>
 
                    <div class="invalid-feedback">
                    Please Enter valid Source.
                  </div>
                    </div>

                    </div>

                    <div class="col-sm-5">
                    <div class="form-group">
                    <label for ="date">Date</label> 
                    <input type ="date" name ="date" id ="date" class="form-control" value = "{{$student ->date}}"required>
                    <div class="invalid-feedback">
                    Please Enter valid Date.
                </div>
              
                  </div>
                    </div>

                    <div class="col-sm-3">
                    <div class="form-group">
                    <label for ="register_by">Register By</label> 
        
                  <input type ="text" class="form-control" name ="register_by" id ="register_by" value = "{{Auth::user()->name }}"required>
                                      
                     
                         
                    <div class="invalid-feedback">
                    Please Enter valid detail.
                  </div>
         
                  </div>
                    </div>
                    
              </form>
              
                  </div>

                  <div class="card-footer">
                  <button type="submit" value="Save" class="btn bg-gradient-success float-right ">save</button>
                  <a href ="{{URL::previous()}}" class="btn bg-gradient-primary" href="#">Back</a>
                </div>
            
              
               

<script>
  (function() {
    
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();





</script>


</body>
</html>
 @endsection


