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
              <li class="breadcrumb-item active"><a href="{{route('batch.index')}}">batch</a></li>
              <li class="breadcrumb-item">Edit</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
<section class="content">
  <form action = "{{route('batch.update',$batch->id)}}" method = "POST" class="needs-validation" novalidate  >
     <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
       <div class="d-flex justify-content-center">
       <div class="col-md-8">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"><b>Edit Batch</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                      <label for ="course_name">Course Name</label> 
                  <select type ="text" class="form-control"  name ="course_name" id ="course_name" value = "{{$batch ->course_name}}"required onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;">
                
                  @foreach ($courses as $course)
                            <option <?php if(($batch->course_name)==$course->course_name){ echo 'selected'; } ?>>{{ $course->course_name}}</option>
                            
                          @endforeach
                          
                      </select>
        
                      </div>
                    </div>
                  
                  <div class="col-sm-4">
                   <div class="form-group">
                          <label for ="registration_date">Registraion Date</label>
                          <input type ="date" name ="registration_date" id ="registration_date"class="form-control"value = "{{$batch -> registration_date}}"required>
       
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-sm-3">
                 <div class="form-group">
                        <label for ="start_by">Start By</label>
                        <input type ="date" name ="start_by" id ="start_by"class="form-control"value = "{{$batch -> start_by}}"required>
                       
       
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                          <label for ="end_by">End By</label>
                          <input type ="date" name ="end_by" id ="end_by"class="form-control"value = "{{$batch -> end_by}}"required>
       
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                      <label for ="batch_name">Batch Name</label>
                      <input type ="text" name ="batch_name" id ="batch_name"class="form-control"value = "{{$batch -> batch_name}}" required>
        
                      </div>
                    </div>
              
                    </div>
                    <div class="row">
                    
               

                  
               </div>
                    

               </form> 
    
<div class="card-footer">
                  <button type="submit" class="btn bg-gradient-success float-right">Save</button>
                  <a href ="{{URL::previous()}}" class="btn bg-gradient-primary float-left">Back</a>

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


