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
              <li class="breadcrumb-item active"><a href="{{route('inquiry.index')}}">Inquiry</a></li>
              <li class="breadcrumb-item">Add Inquiry</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
<div>
<div >
  
 
<br>

    <form action ="{{route('inquiry.store')}}" method = "POST">
     {{csrf_field()}}

     <div class=" d-flex justify-content-center  ">
                <div class=" col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Add New Inquiry</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Phone number</label>
                      <input type="text" name="phone_number" maxlength="10" id="exampleInputsource1" class="form-control" id ="phone_number" pattern="(0){1}[0-9]{9}" autocomplete="phone_number" placeholder="Enter the Phone number" aria-describedby="exampleInputsource-error" aria-invalid="true" required>

                    </div>
                   
                    </div>
                    <div class="col-sm-8">
                    <div class="form-group">
                    <label>Email</label>
                        <input type="text" name ="email" id="exampleInputsource1" class="form-control" id ="email" autocomplete="email" placeholder="Enter the email" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="form-group">
                    <label>Title</label>
                        <select type="text" name ="title" id="exampleInputsource1" class="form-control" id ="title"  placeholder="Enter the title" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
                        
                        <option>Mr</option>
                        <option>Mrs</option>
                        <option>Ms</option>
                        <option>Dr</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-sm-9">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Name</label>
                        <input type="text" name ="name" id="exampleInputsource1"autocomplete="name" class="form-control" id ="name" placeholder="Enter the name" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
                    </div>
                   
                    </div>

                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Source</label>
                        <select type="text" name ="source" id="exampleInputsource1" class="form-control" id ="source" placeholder="Enter the source" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
                        <option>Call</option>
                        <option>Walk in</option>
                        <option>Web</option>
                        <option>From cordinator</option>
                        <option>From student</option>
                        <option>From branch</option>
                        <option>Others</option>
                        </select>
                    </div>
                   </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Status</label>
                      <select type="text" name ="status" id="exampleInputsource1" class="form-control" id ="status"placeholder="Enter the status" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
                       
                        <option>Pending</option>
                        <option>Registered</option>
                        <option>Declined</option>
                      </select>
                    </div>
                   
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                    <label>Course  <<a href="{{route('course.create')}}">Add new</a>></label>
                        <select type="text" name ="course_name" id="exampleInputsource1" class="form-control" id ="course_name"  placeholder="Enter the course" aria-describedby="exampleInputsource-error" aria-invalid="true" required onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;">
                        @foreach ($courses as $course)
                        <option>{{ $course->course_name}}</option>
                        @endforeach
                        </select>
                    </div>
                    
                    </div>


                    <div class="col-sm-12">
                    <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id ="description" autocomplete="description" id="exampleInputsource1" class="form-control" autofocus placeholder="Enter the Description" aria-describedby="exampleInputsource-error" aria-invalid="true" required></textarea>
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
            

               





 @endsection



     







