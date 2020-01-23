@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>
<br>
    <a href="{{route('student.create')}}"  class="btn  btn-primary" tittle="show details">
    <i class="fas fa-user-plus"></i> Student Register 
     </a>
    
 <div class="col-sm-12 col-md-4 float-right">
   <div class="row"><div class="col-sm-8 col-md-6" ><div class="dataTables_length" id="example1_length">
   <label>Show  entries <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div>
   
   <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div>
   
   </div>      
     <table   class="table table-bordered table-striped dataTable"id="coursedatatable"> 
     
     <thead>
      
     
     <tr>
    
    <th>Student Name</th>
    <th>Status</th>
    <th>Email Id</th>   
    <th>Address</th> 
    
    <th>Phone Number</th>  
    <th>Course Id</th> 
    <th>Actions</th>  
     

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

                
                 
            <input type = "hidden" name = "_method" value = "view"> 
                <a href="{{route('student.show',$student->id)}}" tittle="view details" class="btn btn-sm " style="color:#0066ff";>
                    <i class="fas fa-eye"> </i>
                </a>
                
                <input type = "hidden" name = "_method" value = "edit"> 
                <a href="{{route('student.edit',$student->id)}}" tittle="edit details" class="btn btn-sm " style="color:#009933";>
                    <i class="fas fa-edit"> </i>
                </a>
                
               
                    <input type = "hidden" name = "_method" value = "delete"> 
                    {{csrf_field()}}
                    <button type="submit"  class="btn  btn-sm " style="color:#cc0000";><i tittle="delete details" class="fa fa-trash"></i></button>
                </form>
                
           </td>
                
    </tr>
    
    </tbody>
   
  
    @endforeach


</body>
</html>
@endsection