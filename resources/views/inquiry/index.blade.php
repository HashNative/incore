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

     

     <table  class="table table-striped table-bordered table-hover" id="coursedatatable"> 
     <thead>
     <tr>
    <th>Source</th>
    <th>Type </th>
    <th>Description</th>
    <th>Staff ID</th>
    <th>Student Id</th>
    
    <th>Date Time</th>   

    </tr>
    </thead>
    <tbody>
    @foreach ($inquiries as $inquiry)
    <tr>
        <td>{{ $inquiry->source}}</td>
        <td>{{ $inquiry->type}}</td>
        <td>{{ $inquiry->description}}</td>
        <td>{{ $inquiry->staff_id}}</td>
        <td>{{ $inquiry->student_id}}</td>
        <td>{{ $inquiry->date_time}}</td>



       <td>
            <form action = "{{route('inquiry.destroy',$inquiry->id)}}" method = "POST" style="display:inline"onsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit" class="btn btn-danger btn-rounded"><i class="fa fa-trash"tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('inquiry.edit',$inquiry->id)}}"class ="btn btn-success btn-rounded" tittle="edit details">
                <i class="fa fa-pencil"> </i>
            </a>
           <a href="{{route('inquiry.show',$inquiry->id)}}"class ="btn btn-outline btn-info" tittle="show details">
                <i class="fa fa-eye"></i>
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection