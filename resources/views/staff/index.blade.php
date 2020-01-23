@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>

    <a href="{{route('staff.create')}}"class="btn btn-primary btn-flat  fa-" tittle="Add"> <i class="fas fa-plus"></i>
                Add Staff 
            </a>     

     <table  class="table table-bordered table-striped dataTable "> 
    
     
     <thead>
     
     <tr>
    <th>Staff Id </th>
    <th>Staff Name </th>
    <th>Languages</th>
    
    <th>Mobile Number</th> 
    <th>Actions</th>     

    </tr>
    </thead>
    <tbody>
    @foreach ($staffs as $staff)
    <tr>
        <td>{{ $staff->staff_id}}</td>
        <td>{{ $staff->staff_name}}</td>
        <td>{{ $staff->languages}}</td>
        
        <td>{{ $staff->mobile_number}}</td>


        <td>

           
            
               <form action = "{{route('staff.destroy',$staff->id)}}" method = "POST" onsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                
                {{csrf_field()}}
                <a href="{{route('staff.edit',$staff->id)}}" tittle="edit details"class=" btn btn-sm fas fa-edit"style="color:#009933";>    
            
                <button type="submit"class="btn btn-sm" ><i tittle="delete details"class= "fa fa-trash"style="color:#cc0000";></i></button>
            
            
            
       
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection