@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>

    <a href="{{route('student.create')}}"class ="btn btn-outline btn-info" tittle="show details">
               add
            </a>

     <table  class="table table-striped table-bordered table-hover" id="coursedatatable"> 
     <thead>
     <tr>
    
    <th>Student Name</th>
    <th>Status</th>
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
        <td>{{ $student->email_id}}</td>
        <td>{{ $student->address}}</td>
        <td>{{ $student->phone_number}}</td>
        <td>{{ $student->course_id}}</td>

       <td>
            <form action = "{{route('student.destroy',$student->id)}}" method = "POST" style="display:inline"onsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit" class="btn btn-danger btn-rounded"><i class="fa fa-trash"tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('student.edit',$student->id)}}"class ="btn btn-success btn-rounded" tittle="edit details">
                <i class="fa fa-pencil"> </i>
            </a>
           <a href="{{route('student.show',$student->id)}}"class ="btn btn-outline btn-info" tittle="show details">
                <i class="fa fa-eye"></i>
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection