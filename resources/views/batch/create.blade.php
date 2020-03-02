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
              <li class="breadcrumb-item">Add Batch</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
<section class="content">
  <form action ="{{route('batch.store')}}" method = "post" role="form">
  {{csrf_field()}}
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="d-flex justify-content-center">
          <div class="col-md-8 ">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Create Batch</b></h3>
              </div>

         <div class="card-body">
                <form role="form">
                  <div class="row">
           
           <div class="col-sm-8">
             <div class="form-group">
             <label for ="course_name">Course Name</label>
                                            <select type ="text" name ="course_name" id="course_name"  class="form-control"class="required"onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;" >

                                            @foreach ($courses as $course)
                                              <option >{{$course->course_name}}</option>
                                              @endforeach
                                            </select>
    </div> 
    </div>
    <div class="col-sm-4">
    <div class="form-group"> 
         <label for ="registration_date">Registraion Date</label> 
         <input type ="date" name ="registration_date" id ="registration_date" class="form-control" autofocus placeholder="Enter the Registration Date"id="exampleInputRegistration_date1"aria-describedby="exampleInputregistration_date-eror" airia-invalid="true" required>
    </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group"> 
        
            <label for ="start_by">Start By</label> 
        
            <input type ="date" name ="start_by" id ="start_by" class="form-control" autofocus placeholder="Enter the Start Date"id="exampleInputStart_by1"aria-describedby="exampleInputstart_by-eror" airia-invalid="true" required>
        </div>
        </div>
        <div class="col-sm-3">
        <div class="form-group"> 
        
            <label for ="end_by">End By</label> 
        
            <input type ="date" name ="end_by" id ="end_by" class="form-control" autofocus placeholder="Enter the End Date"id="exampleInputEnd_by1"aria-describedby="exampleInputend_by-eror" airia-invalid="true" required>
        </div>
    </div>
        <div class="col-sm-6"> <div class="form-group">
                 <label for ="batch_name">Batch Name</label>
                 <input type ="text" name ="batch_name" id ="batch_name" autocomplete="batch_name" class="form-control" maxlength="100" placeholder="Enter the Batch Name"id="exampleInputBatch_name1"aria-describedby="exampleInputbatch_name-eror" airia-invalid="true" required>
    </div> 
        </div>
        
       
       
     
   
        </div>
    <div class="card-footer">
      <input type ="submit" class="btn btn-success float-right" value="Create">
      <a href ="{{URL::previous()}}" class="btn btn-primary float-left" >Back</a>
    </div>
 </form>
</div>
@endsection

