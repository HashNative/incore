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
              <li class="breadcrumb-item active"><a href="{{route('inquiry.index')}}">Inquiry</a></li>
              <li class="breadcrumb-item">Edit Inquiry</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
<form action = "{{route('inquiry.update',$inquiry->id)}}" method = "POST" class="needs-validation" novalidate>
  <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
   

<div class=" d-flex justify-content-center  ">
                <div class=" col-8  ">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Inquiry</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="phone_number">Phone number</label> 
        <input type ="text" name="phone_number" class="form-control" id ="phone_number" value = "{{ $inquiry->phone_number}}" required>
        <div class="invalid-feedback">
        Please Enter valid phone number.
      </div>
        
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="inquiry_by">Inquiry by</label> 
        <input type ="text" name ="inquiry_by" class="form-control" id ="inquiry_by" value = "{{ $inquiry->inquiry_by}}" required>
        <div class="invalid-feedback">
        Please Enter valid Inquiry by.
      </div>
      
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="source">Source</label> 
        <select type ="text" name="source" class="form-control" id ="source" value = "{{ $inquiry->source}}" required>
        <option>Call</option>
                        <option>Walk in</option>
                        <option>Web</option>
                        <option>From cordinator</option>
                        <option>From student</option>
                        <option>From branch</option>
                        </select>
        <div class="invalid-feedback">
        Please Enter valid Source.
      </div>
        
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="course_id">Course</label> 
        <input type ="text" name ="course_id" class="form-control" id ="course_id" value = "{{ $inquiry->course_id}}"required>
        <div class="invalid-feedback">
        Please Enter valid Course.
      </div>
        
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="date_time">Date Time</label> 
        <input type ="datetime-auto" name="date_time" class="form-control" id ="date_time" value = "{{ $inquiry->date_time}}"required>
        <div class="invalid-feedback">
        Please Enter valid Date Time.
      </div>
        
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="text">Title</label> 
                       <select type ="text" name ="title" class="form-control" id ="title" value = "{{ $inquiry->title}}"required>
                       
                        <option>Mr</option>
                        <option>Mrs</option>
                        <option>Ms</option>
                        </select>
                       <div class="invalid-feedback">
        Please Enter valid Title.
      </div>
        
                  
                    </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="name">Name</label> 
        <input type ="text" name="name" class="form-control" id ="name" value = "{{ $inquiry->name}}"required>
        <div class="invalid-feedback">
        Please Enter valid Name.
      </div>
        
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="email">Email</label> 
        <input type ="text" name ="email" class="form-control" id ="email" value = "{{ $inquiry->email}}"required>
        <div class="invalid-feedback">
        Please Enter valid Email.
      </div>
        
                    </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="status">Status</label> 
        <select type ="text" name="status" class="form-control" id ="status" value = "{{ $inquiry->status}}"required>
        
                        <option>Registered</option>
                        <option>Pending</option>
                        <option>Declined</option>
                        </select>
        <div class="invalid-feedback">
        Please Enter valid Status.
      </div>
        
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="follow_up">Followup</label> 
        <input type ="text" name ="follow_up" class="form-control" id ="follow_up" value = "{{ $inquiry->follow_up}}"required>
        <div class="invalid-feedback">
        Please Enter valid Followup.
      </div>
        
                    </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="description">Description</label> 
                  <textarea name="description" id ="description" class="form-control" id ="description" value = "{{ $inquiry->description}}" required></textarea>
                  <div class="invalid-feedback">
        Please Enter Description.
      </div>
        
                    </div>
                   
                    </div>
                  
              </form>
              
                  </div>

                  <div class="card-footer">
                  <button type="submit" value="Save" class="btn bg-gradient-success float-right ">save</button>
                  <a href ="{{URL::previous()}}" class="btn bg-gradient-primary" href="#">Back</a>
                </div>
</div>
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



