@extends('layouts.master')
@section('content')
<div>
<div >
  
  <!-- <a href ="{{URL::previous()}}" button type="button" class="btn btn-primary">Back</a>
</div> -->
<br>

    <form action ="{{route('inquiry.store')}}" method = "POST">
     {{csrf_field()}}

     <div class=" d-flex justify-content-center  ">
                <div class=" col-8  ">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new inquiry</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Source</label>
                      <input type="text" name="source" class="form-control" id ="source" placeholder="Enter the source">
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label>Type</label>
                        <input type="text" name ="type" class="form-control" id ="type" placeholder="Enter the type">
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Description</label>
                        <input type="text" name ="description" class="form-control" id ="description" placeholder="Enter the description">
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label>Staff Id</label>
                        <input type="text" name ="staff_id" class="form-control" id ="staff_id"  placeholder="Enter the staff id">
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Student Id</label>
                        <input type="text" name="student_id" class="form-control" id ="student_id"   placeholder="Enter the student id">
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label>Date Time</label>
                        <input type="datetime-local" name="date_time" class="form-control" id ="date_time"   placeholder="Enter the date and time">
                  
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



     







