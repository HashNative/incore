@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>

    <a href="{{route('course.create')}}" class="btn btn-block btn-primary" tittle="show details">
                Add Course
            </a>
     

     <table id="coursedatatable"class="table table-bordered table-hover dataTable"> 
     <thead>
     <tr>
    <th>Course Id </th>
    <th>Course Name </th>
    <th>Registration date</th>
    <th>Course fees</th>
    <th>Description</th>   
    <th>End by</th>
    <th>Start by</th>

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
            <form action = "{{route('course.destroy',$course->id)}}" method = "POST" clonsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit"><i class="btn btn-block btn-danger btn-xs"tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('course.edit',$course->id)}}" tittle="edit details"class="btn btn-block btn-danger btn-sm">
                <i > </i>
            </a>
           <a href="{{route('course.show',$course->id)}}" tittle="show details"class="btn btn-block btn-success btn-xs">
                <i ></i>
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection