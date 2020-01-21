@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>

    <a href="{{route('course.create')}}" tittle="show details">
                add
            </a>
     

     <table id="coursedatatable"> 
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
            <form action = "{{route('course.destroy',$course->id)}}" method = "POST" clonsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit"><i class="fa fa-trash"tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('course.edit',$course->id)}}" tittle="edit details">
                <i class="fa fa-pencil"> </i>
            </a>
           <a href="{{route('course.show',$course->id)}}" tittle="show details">
                <i class="fa fa-eye"></i>
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection