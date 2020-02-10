@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <a href="{{route('course.create')}}" class="btn  btn-primary" tittle="show details">
            <i class="fas fa-plus"></i>
                Add Course
            </a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Course</li>
              
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
    
      
      <!-- Main content -->
 <section class="content">
      <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Course Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-fixed">
                    <thead>
                    <tr>
                 
                    <th>Course Name </th>
                    <th>Registration date</th>
                    <th>Course fees</th>
                    <th>Description</th>
                    <th>Start by</th>   
                    <th>End by</th>
                    <th>Actions</th>

                    </tr>
                    </thead>
                    <body>
                    @foreach ($courses as $course)
                    <tr>
                       
                        <td>{{ $course->course_name}}</td>
                        <td>{{ $course->registration_date}}</td>
                        <td>{{ $course->course_fees}}</td>
                        <td>{{ $course->description}}</td>
                        <td>{{ $course->start_by}}</td>
                        <td>{{ $course->end_by}}</td>
                       
                        



        <td>
        <form action = "{{route('course.destroy',$course->id)}}" method = "POST"onsubmit="if(!confirm('Are you sure')){return false;}">


           <input type = "hidden" name = "_method" value="edit">
           <a href="{{route('course.edit',$course->id)}}" tittle="edit details"class="btn btn-sm"style="color:#ffc107";>
            <i class="fa fa-edit"></i></a>

                <input type = "hidden" name = "_method" value="delete"> 
                {{csrf_field()}}
                <button type="submit" class="btn btn-sm" style="color:#cc0000";>
                <i title="delete details" class="fa fa-trash"></i></button>
            
            </form>
           
            </a>
       
           
            </a>
       
           
        </td>
       
    </tr>
    </tr>
              @endforeach
             </tbody>
            
            </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
      
@endsection