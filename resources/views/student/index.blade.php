@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>

    <a href="{{route('student.create')}}" tittle="show details">
               add
            </a>

     <table id="coursedatatable"> 
     <thead>
     <tr>
    
    <th>Student Name</th>
    <th>Email Id</th>   
    <th>Address</th> 
    <th>Email Id</th>  
    <th>Phone Number</th>  
    <th>Course Id</th>     

    </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
    <tr>
      
        <td>{{ $student->student_name}}</td>
        <td>{{ $student->status}}</td>
        <!-- <td>{{ $student->email_id}}</td> -->
        <td>{{ $student->address}}</td>
        <td>{{ $student->phone_number}}</td>
        <td>{{ $student->course_id}}</td>

       <td>
            <form action = "{{route('student.destroy',$student->id)}}" method = "POST" onsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit" ><i tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('student.edit',$student->id)}}" tittle="edit details">
                <i > </i>
            </a>
           <a href="{{route('student.show',$student->id)}}" tittle="show details">
                <i ></i>
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection