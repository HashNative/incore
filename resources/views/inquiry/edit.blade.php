@extends('layouts.master')
@section('content')
<div>
<a href ="{{URL::previous()}}" button type="button" class="btn btn-primary">Back</a>
</div>
<br>

<form action = "{{route('inquiry.update',$inquiry->id)}}" method = "POST">
  <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
   <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Source</label>
                        <input type="text" name="source" class="form-control" id ="source" value = "{{$inquiry->source}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Type</label>
                        <input type="text" name = "type"class="form-control" id ="type" value = "{{$inquiry->type}}">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" name = "description" class="form-control" id ="description"value = "{{$inquiry->description}}">
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Staff ID</label>
                        <input type="text" name = "staff_id" class="form-control" id ="staff_id" value = "{{$inquiry->staff_id}}">
                      </div>
                      <div class="form-group">
                        <label>Student Id</label>
                        <input type="text" name="student_id" class="form-control" id ="student_id" value = "{{$inquiry->student_id}}">
                    </div>
                    <div class="form-group">
                        <label>Date Time</label>
                        <input type="text" name="date_time" class="form-control" id ="date_time" value = "{{$inquiry->date_time}}">
                      </div>
                    </div>
</div>


                    
                  
      

                 
                    <button type ="submit" value="Save" class="btn bg-gradient-success float-right">Save</button>
</div>

  
  
</form>
</div>
 @endsection


