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
                <div class=" col-md-8">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"><b>Edit Student Details</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">



                  <div class="row">

                  <div class="col-sm-2">
                                    <div class="form-group">
                                    <label for ="title">Title</label>
                                        <select type="text" name ="title" id="title" class="form-control" class="form-control" class="required">
                                          
                                          <option selected>Mr</option>
                                          <option>Miss</option>
                                          <option >Mrs</option>
                                          <option>Dr</option>

                                        </select>

                                    </div>
                                    </div>


                            <div class="col-sm-10">
                              <!-- text input -->
                            <div class="form-group">
                            <label for ="student_name">Student Name</label> 
                          <input type ="text" name ="student_name" class="form-control" id ="student_name" value = "{{$student ->name}}" required>
                          <div class="invalid-feedback">
                          Please Enter valid username.
                        </div>
                          
                                    </div> 
                    </div>
                    <div class="col-sm-8">
                    <div class="form-group">
                  <label for ="course_name">Course Name</label> 
                  <select type ="text" class="form-control"  name ="course_name" id ="course_name" value = "{{$student ->course_name}}"required onmousedown="if(this.options.length>5){this.size=5;}"  onchange="showBatches(this.value);" onblur="this.size=0;">
                
                  @foreach ($courses as $course)
                            <option <?php if(($student->course_name)==$course->course_name){ echo 'selected'; } ?>>{{ $course->course_name}}</option>
                            
                          @endforeach
                          
                      </select>
        
                    <div class="invalid-feedback">
                    Please Enter valid Course Name.
                  </div>
     
                      </div>
                    </div>
                  
                  <div class="col-sm-4">
                                    <div class="form-group">
                                    <label for ="batch_name">Batch Name</label>
                                        <select type="text" name ="batch_name" id="batch_name" class="form-control" class="form-control" class="required">
                                          
                                        @foreach ($batches as $batch)
                            <option <?php if(($student->batch_name)==$batch->batch_name){ echo 'selected'; } ?>>{{ $batch->batch_name}}</option>
                            
                          @endforeach
                                        </select>

                                    </div>
                                    </div>
                              </div>
                  <div class="row">
                    <div class="col-sm-5">
                    
                    <div class="from-group">
                        <label for ="phone_number">Mobile Number</label> 
                        <input type ="integer" name="phone_number" class="form-control"  maxlength="13" id ="phone_number" value = "{{ $student->phone_number}}" required>
                        <div class="invalid-feedback">
                        Please Enter valid phone number.
                      </div>
          
                    </div>
                  </div>

                    <div class="col-sm-7">
                    <div class="form-group">            
                    <label for ="email_id">Email</label> 
                    <input type ="text" name ="email_id" id ="email_id" class="form-control"   value = "{{$student ->email}}" required>
                    <div class="invalid-feedback">
                    Please Enter valid Email.
                  </div>
                </div>
                </div>
</div>
                

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <label for ="gender">Gender</label>
                                        <select type="text" name ="gender" id="gender" class="form-control" class="form-control" class="required">
                                          
                                          <option selected>Male</option>
                                          <option >Female</option>
                                        </select>

                                    </div>
                                    </div>
                                   
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                      <label>NIC</label>
                                      <input type="text" name="nic" maxlength="10" id="exampleInputsource1" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" class="form-control" id ="nic" value = "{{$student ->nic}}"  autocomplete="off" placeholder="Enter the NIC number" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
                                      </div>
                                    </div>

                                    <div class="col-sm-3">
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

                                    


                             
                    

                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
                    <div class="form-group">
                  <label for ="source">Source</label> 
                  <select type ="text"  class="form-control" name ="source" id ="source" value = "{{$student ->source}}"required>
                  <option <?php if(($student->source)=='Call'){ echo 'selected'; } ?>>Call</option>
                  <option <?php if(($student->source)=='Walk In'){ echo 'selected'; } ?>>Walk In</option>
                  <option <?php if(($student->source)=='Web'){ echo 'selected'; } ?>>Web</option>
                  <option <?php if(($student->source)=='From Student'){ echo 'selected'; } ?>>From Student</option>
                  <option <?php if(($student->source)=='From Cordinator'){ echo 'selected'; } ?>>From Cordinator</option>
                  <option <?php if(($student->source)=='From Branch'){ echo 'selected'; } ?>>From Branch</option>
                  <option <?php if(($student->source)=='Others'){ echo 'selected'; } ?>>Others</option>
                          
                      </select>
 
                    <div class="invalid-feedback">
                    Please Enter valid Source.
                  </div>
                    </div>

                    </div>
                          <div class="col-sm-3">
                          <div class="form-group">
                        <label for ="inquiry_by">Inquiry By</label> 
                        <select type ="text" class="form-control"  name ="inquiry_by" id ="inquiry_by"  value = "{{ $student->inquiry_by}}"required>
                      
                        @foreach ($staffs as $staff)
                                  <option <?php if(($student->inquiry_by)==$staff->name){ echo 'selected'; } ?>>{{ $staff->name}}</option>
                                  @endforeach    
                            </select>
                              
                              <div class="invalid-feedback">
                              Please Enter valid detail.
                              </div>
                    </div>
              </div>
                    
                    

                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="status">Status</label> 
        <select type ="text" name="status" class="form-control" id ="status" value = "{{ $student->status}}"required>
        
                      <option <?php if(($student->status)=='Pending'){ echo 'selected'; } ?>>Pending</option>

                        <option <?php if(($student->status)=='Registered'){ echo 'selected'; } ?>>Registered
                      </option>
                        <option <?php if(($student->status)=='Declined'){ echo 'selected'; } ?>>Declined</option>
                        </select>
        <div class="invalid-feedback">
        Please Enter valid Status.
      </div>
        
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
<script type="text/javascript">
  function showBatches(str) {


    var select = document.getElementById("batch_name");
    var length = select.options.length;
    for (i = length - 1; i >= 0; i--) {
      select.options[i] = null;
    }

    <?php
    foreach ($batches as $batch) {


    ?>
      if (str == '<?php echo $batch->course_name; ?>') {

        var select = document.getElementById("batch_name");
        select.options[select.options.length] = new Option('<?php echo $batch->batch_name; ?>', '<?php echo $batch->batch_name; ?>');
      }
    <?php
    }
    ?>


  }
</script>



</body>
</html>
 @endsection


