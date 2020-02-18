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
              <li class="breadcrumb-item active"><a href="{{route('staff.index')}}">Staff</a></li>
              <li class="breadcrumb-item">Edit</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
<div>

<form action = "{{route('staff.update',$staff->id)}}" method = "POST" class="needs-validation" novalidate  >
  <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
     <div class="d-flex justify-content-center">
     <div class ="col-md-6"> 
     <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Staff </h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
    
    <div  class ="col-md-8">
    <div class="from-group">
        <label for ="name">Staff Name</label>
        <input type ="text" name ="name" id ="name"value = "{{$staff -> name}}"class="form-control" required >
        <div class="invalid-feedback">
        Please Enter valid Staff Name .
      </div>
   </div>
   </div> 

   <div  class ="col-md-4">
   <div class="from-group">
        <label for ="languages">Language</label>
        <select type ="text" name ="languages" id ="languages"value = "{{$staff -> languages}}"class="form-control " >
       
        <option <?php if(($staff->languages)=='English'){ echo 'selected'; } ?>>English</option>
        <option <?php if(($staff->languages)=='Tamil'){ echo 'selected'; } ?>>Tamil</option>
        <option <?php if(($staff->languages)=='Sinhala'){ echo 'selected'; } ?>>Sinhala</option>
        </select>
   </div>
   </div> 

   <div  class ="col-md-8">
   <div class="from-group">
        <label for ="email">Email</label>
        <input type ="email" name ="email" id ="email"value = "{{$staff -> email}}"class="form-control" required >
        <div class="invalid-feedback">
        Please Enter valid Email.
      </div>
   </div>
   </div> 

   <div  class ="col-md-4">
   <div class="from-group">
   <label for ="mobile_number">Mobile Number</label> 
        <input type ="integer" name="mobile_number" class="form-control"pattern="[077][0-9]{9}" maxlength="10" id ="mobile_number" pattern="[0-9]{1}[0-9]{9}" value = "{{ $staff->mobile_number}}" required>
        <div class="invalid-feedback">
        Please Enter valid phone number.
      </div>
        
        
        </div>
        </div> 

   
       </div> 

        
</from>
</div>


<div class="card-footer">
<a href ="{{URL::previous()}}" class="btn bg-gradient-primary float-left " href="#">Back</a> 
<button type ="submit"  value="Save" class="btn btn-success float-right">Save </button>    

  


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



 @endsection
