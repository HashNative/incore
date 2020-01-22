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

        <input type = "hidden" name = "_method" value="view">
        <a href="{{route('course.show',$course->id)}}" tittle="show details" class="btn btn-sm" style="color:#0066ff";>
           <i class="fa fa-eye"></i> </a>

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