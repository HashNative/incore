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
        <input type ="text" name ="student_name" class="form-control" id ="student_name" value = "{{$student ->student_name}}" required>
        <div class="invalid-feedback">
        Please Enter valid username.
      </div>
        
                  </div> 
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">            
                    <label for ="email_id">Email Id</label> 
        <input type ="text" name ="email_id" id ="email_id" class="form-control"value = "{{$student ->email_id}}" required>
        <div class="invalid-feedback">
        Please Enter valid Email.
      </div>
     
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                    
                      <div class="form-group">
                      <label for ="phone_number">Phone Number</label> 
        <input type ="text" name ="phone_number" id ="phone_number" class="form-control" value = "{{$student ->phone_number}}"required>
        <div class="invalid-feedback">
        Please Enter valid Phone Number.
      </div>
     
                  </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for ="register_by">Register By</label> 
        <input type ="text" name ="register_by" id ="register_by" class="form-control" value = "{{$student ->register_by}}"required>
        <div class="invalid-feedback">
        Please Enter valid detail.
      </div>
         
                  </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="course_name">Course Name</label> 
        <input type ="text" name ="course_name" id ="course_name" class="form-control" value = "{{$student ->course_name}}"required>
        <div class="invalid-feedback">
        Please Enter valid Course Name.
      </div>
     
                  </div>

                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="inquiry_by">Inquiry By</label> 
                         <input type ="text" name ="inquiry_by" id ="inquiry_by" class="form-control" value = "{{$student ->inquiry_by}}"required>
                         <div class="invalid-feedback">
                         Please Enter valid detail.
      </div>
          </div>
                    </div>
                    
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="inquiry_source">Inquiry Source</label> 
                        <input type ="text" name ="inquiry_source" id ="inquiry_source" class="form-control" value = "{{$student ->inquiry_source}}"required>
                        <div class="invalid-feedback">
                        Please Enter valid Inquiry Source.
      </div>
     
                  </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <label for ="transfer">Transfer</label> 
                          <select type ="text" class="form-control" name ="transfer" id ="transfer" value = "{{$student ->transfer}}"required>
                            
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                            
                        </select>
                        <div class="invalid-feedback">
                        Please Enter valid value.
      </div>
     
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="source">Source</label> 
        <input type ="text" name ="source" id ="source" class="form-control" value = "{{$student ->source}}"required>
        <div class="invalid-feedback">
        Please Enter valid Source.
      </div>
         </div>

                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for ="date">Date</label> 
                    <input type ="date" name ="date" id ="date" class="form-control" value = "{{$student ->date}}"required>
                    <div class="invalid-feedback">
                    Please Enter valid Date.
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


