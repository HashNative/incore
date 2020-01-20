@extends('layouts.master')
@section('content')
<html>
<head>
<style type="text/css">
        table,tr,td {
            border: 3px solid rgb(19,112,143) ;
        }
        
    </style>
    </head>
    <body>

    <a href="{{route('course.create')}}"class ="btn btn-outline btn-info" tittle="show details">
                add
            </a>
     

     <table  class="table table-striped table-bordered table-hover" id="coursedatatable"> 
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
    <tbody>
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
            <form action = "{{route('course.destroy',$course->id)}}" method = "POST" style="display:inline"onsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit" class="btn btn-danger btn-rounded"><i class="fa fa-trash"tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('course.edit',$course->id)}}"class ="btn btn-success btn-rounded" tittle="edit details">
                <i class="fa fa-pencil"> </i>
            </a>
           <a href="{{route('course.show',$course->id)}}"class ="btn btn-outline btn-info" tittle="show details">
                <i class="fa fa-eye"></i>
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection