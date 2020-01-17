@extends('Layouts.master')
@section('content')
</head>
    <body>

      <div class ="text-right">
        <a href="{{route('course.create')}}" class="btn btn-outline btn-primary dim" tittle="add details">
          <i class="fa fa-check"></i>
        </a>
        <a href ="admin"class="btn btn-success btn-rounded" href="#"style ="width:100px">Main Menu</a>
     </div>
     <br>


     <table  class="table table-striped table-bordered table-hover" id="coursedatatable"> 
     <thead>
     <tr>
    <th>Course Unit </th>
    <th>Course Code </th>
    <th>Action </th>
   

    </tr>
    </thead>
    <tbody>
    @foreach ($courses as $course)
    <tr>
        <td>{{ $course->CourseUnit}}</td>
        <td>{{ $course->CourseCode}}</td>
       <td>
            <form action = "{{route('course.destroy',$course ->id)}}" method = "POST" style="display:inline"onsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit" class="btn btn-danger btn-rounded"><i class="fa fa-trash"tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('course.edit',$course ->id)}}"class ="btn btn-success btn-rounded" tittle="edit details">
                <i class="fa fa-pencil"> </i>
            </a>
           <a action = "{{route('course.show',$course ->id)}}"class ="btn btn-outline btn-info" tittle="show details">
                <i class="fa fa-eye"></i>
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
    <tfoot>
     <tr>
    <th>Course Unit </th>
    <th>Course Code </th>
    <th>Action </th>
    

    </tr>
    </tfoot>
        
        
</table>

</body>
</html>
@endsection