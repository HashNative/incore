@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>
    <a href="{{route('inquiry.create')}}" tittle="Add">
                add
            </a>
     <table> 
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
       
            <form action = "{{route('inquiry.destroy',$inquiry->id)}}" method = "POST"onsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit" ><i tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('inquiry.edit',$inquiry->id)}}" tittle="edit details">
                <i > </i>
            </a>
           <a href="{{route('inquiry.show',$inquiry->id)}}" tittle="show details">
                <i ></i>
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection