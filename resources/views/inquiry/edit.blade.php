@extends('layouts.master')
@section('content')


<form action = "{{route('inquiry.update',$inquiry->id)}}" method = "POST">
  <input type = "hidden" name = "_method" value="put">
     {{csrf_field()}}
   

<div class=" d-flex justify-content-center  ">
                <div class=" col-8  ">
            <div class="card card-primary">
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
                  <label for ="source">Source</label> 
        <input type ="text" name="source" class="form-control" id ="source" value = "{{$inquiry->source}}">
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="type">Type</label> 
        <input type ="text" name ="type" class="form-control" id ="type" value = "{{$inquiry->type}}">
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="student_id">Student Id</label> 
        <input type ="text" name="student_id" class="form-control" id ="student_id" value = "{{$inquiry->student_id}}">
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="description">Description</label> 
        <input type ="text" name ="description" class="form-control" id ="description"value = "{{$inquiry->description}}">
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                  <label for ="staff_id">Staff ID</label> 
        <input type ="text" name="staff_id" class="form-control" id ="staff_id" value = "{{$inquiry->staff_id}}">
                    </div>
                   
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="date_time">Date Time</label> 
        <input type ="datetime-local" name ="date_time" class="form-control" id ="date_time" value = "{{$inquiry->date_time}}">
                  
                    </div>
                    </div>
                    
                    <!-- <div class="form-group">
                  <label for ="staff_id">Staff ID</label> 
        <input type ="text" name ="staff_id" class="form-control" id ="staff_id" value = "{{$inquiry->staff_id}}">
                  </div>
                    </div>
                    

                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="student_id">Student Id</label> 
        <input type ="text" name ="student_id" class="form-control" id ="student_id" value = "{{$inquiry->student_id}}">
                  </div>

                    </div>

                    <div class="col-sm-6">
                    <div class="form-group">
                  <label for ="date_time">Date Time</label> 
        <input type ="text" name ="date_time" class="form-control" id ="date_time" value = "{{$inquiry->date_time}}">
                  </div>
                    </div>
                     -->
              </form>
              
                  </div>

                  <div class="card-footer">
                  <button type="submit" value="Save" class="btn bg-gradient-success float-right ">save</button>
                  <a href ="{{URL::previous()}}" class="btn bg-gradient-primary" href="#">Back</a>
                </div>
</div>
</div>
            

               




</body>
</html>
 @endsection



