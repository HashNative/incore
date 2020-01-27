@extends('layouts.master')
@section('content')
<html>
<head>

    </head>
    <body>

    <a href="{{route('staff.create')}}" tittle="Add">
                add
            </a>

     <table   > 
     <thead>
     <tr>
    <th>Staff Id </th>
    <th>Staff Name </th>
    <th>Languages</th>
    
    <th>Mobile Number</th>   

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
                <button type="submit" ><i tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('staff.edit',$staff->id)}}" tittle="edit details">
               edit
            </a>
           <a href="{{route('staff.show',$staff->id)}}" tittle="show details">
            view
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection