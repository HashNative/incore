@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>

    <a href="{{route('student.create')}}"  class="btn btn-block btn-primary"tittle="show details">
               add
            </a>

     <table   class="table table-bordered table-hover dataTable"id="coursedatatable"> 
     <thead>
     <tr>
    
    <th>Student Name</th>
    <th>Status</th>
    <th>Email Id</th>   
    <th>Address</th> 
    
    <th>Phone Number</th>  
    <th>Course Id</th>     

    </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
    <tr>
      
        <td>{{ $student->student_name}}</td>
        <td>{{ $student->status}}</td>
        <td>{{ $student->email_id}}</td>
        <td>{{ $student->address}}</td>
        <td>{{ $student->phone_number}}</td>
        <td>{{ $student->course_id}}</td>

       <td>
            <form action = "{{route('student.destroy',$student->id)}}" method = "POST" onsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit"  class="btn btn-block btn-danger btn-xs"><i tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('student.edit',$student->id)}}" tittle="edit details" class="btn btn-block btn-success btn-xs">
                <i > </i>
            </a>
           <a href="{{route('student.show',$student->id)}}" tittle="show details"class="btn btn-block btn-info btn-xs">
                <i ></i>
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection