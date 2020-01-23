@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>

    <a href="{{route('course.create')}}" class="btn  btn-primary" tittle="show details">
    <i class="fas fa-plus"></i>
                Add Course
            </a>
      
         <!-- <div class="row"><div class="col-sm-8 col-md-6"><div class="dataTables_length" id="example1_length">
              <lable>Show entries <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
            <option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div> 
                  
              <div class="col-sm-5 col-md-3 float-right"><div id="example1_filter" class="dataTables_filter">
                  <lable><input type="search" class="form-control forms-control-sm"placeholder="search" aria-control="example1"></lable></div></div></div>-->
     
          
     <table id="coursedatatable"class="table table-bordered table-striped dataTable"> 
     <thead>
     <tr>
    <th>Course Id </th>
    <th>Course Name </th>
    <th>Registration date</th>
    <th>Course fees</th>
    <th>Description</th>   
    <th>End by</th>
    <th>Start by</th>
    <th>Actions</th>

    </tr>
    </thead>
    <body>
    @foreach ($courses as $course)
    <tr>
        <td>{{ $course->course_id}}</td>
        <td>{{ $course->course_name}}</td>
        <td>{{ $course->registration_date}}</td>
        <td>{{ $course->course_fees}}</td>
        <td>{{ $course->description}}</td>
        <td>{{ $course->end_by}}</td>
        <td>{{ $course->start_by}}</td>
        



        <td>
        <form action = "{{route('course.destroy',$course->id)}}" method = "POST"onsubmit="if(!confirm('Are you sure')){return false;}">


           <input type = "hidden" name = "_method" value="edit">
           <a href="{{route('course.edit',$course->id)}}" tittle="edit details"class="btn btn-sm"style="color:#009933";>
            <i class="fa fa-edit"></i></a>

                <input type = "hidden" name = "_method" value="delete"> 
                {{csrf_field()}}
                <button type="submit" class="btn btn-sm" style="color:#cc0000";>
                <i title="delete details" class="fa fa-trash"></i></button>
            
            </form>
           
            </a>
       
           
            </a>
       
           
        </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection