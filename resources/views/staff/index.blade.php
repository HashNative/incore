@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>

    <a href="{{route('staff.create')}}"class="btn btn-primary btn-flat  fa-" tittle="Add"> <i class="fas fa-plus-circle"></i>
                Add Staff 
            </a>     

     <table  class="table table-bordered table-striped dataTable "> 
     <div class="col-sm-12 col-md-4 float-right">
   <div class="row"><div class="col-sm-8 col-md-6" ><div class="dataTables_length" id="example1_length">
   <label>Show  entries <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div>
   
   <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div>
    
     
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