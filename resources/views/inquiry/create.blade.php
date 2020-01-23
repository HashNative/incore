@extends('layouts.master')
@section('content')
<div>
<div >
  
  <a href ="{{URL::previous()}}" button type="button" class="btn btn-primary">Back</a>
</div>
<br>

    <form action ="{{route('inquiry.store')}}" method = "post">
     {{csrf_field()}}
    <div class ="row">
    <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add New inquiry</h3>
              </div>
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-10">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Source</label>
                        <input type="text" name="source" class="form-control" id ="source" placeholder="Enter the source">
                      </div>
        
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name ="type" class="form-control" id ="type" placeholder="Enter the type">
                      </div>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name ="description" class="form-control" id ="description" placeholder="Enter the description">
                      </div>
                    
                    <div class="form-group">
                        <label>Staff Id</label>
                        <input type="text" name ="staff_id" class="form-control" id ="staff_id"  placeholder="Enter the staff id">
                      </div>
                    <div class="form-group">
                        <label>Student Id</label>
                        <input type="text" name="student_id" class="form-control" id ="student_id"   placeholder="Enter the student id">
                      </div>
                    
                    <div class="form-group">
                        <label>Date Time</label>
                        <input type="text" name="date_time" class="form-control" id ="date_time"   placeholder="Enter the date and time">
                      </div>
                    </div>
</div>
    <br>
    <button type ="submit" value="Save" class="btn bg-gradient-success float-right">Save</button>
</div>
    </form>
    </div>
@endsection







