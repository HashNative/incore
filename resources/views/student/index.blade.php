@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="{{route('student.create')}}"  class="btn  btn-primary" tittle="show details">
    <i class="fas fa-user-plus"></i> Student Register 
   </a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
              
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
   
   <section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Student details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">

                    <thead>
     <tr>
    
     <th>Student Id</th>
    <th>Student Name</th>
    <th  >Email Id</th>
      
    <th >Phone Number</th> 
    <th>Register By</th> 
    <th>Course Name</th>
    <th>Inquiry By</th>   
    <th>Inquiry Source</th> 
    <th>Transfer</th>  
    <th>Source</th>  
    <th> Date</th>  
    
    
    <th>Actions</th> 
    
     

    </tr>
    </thead>
    <body>
    @foreach ($students as $student)
    <tr>
      
        <td>{{ $student->id}}</td>
        <td>{{ $student->student_name}}</td>
        <td >{{ $student->email_id}}</td>
        <td>{{ $student->phone_number}}</td>
        <td>{{ $student->register_by}}</td>
        <td >{{ $student->course_name}}</td>
        <td>{{ $student->inquiry_by}}</td>
        <td >{{ $student->inquiry_source}}</td>
        <td >{{ $student->transfer}}</td>
        <td >{{ $student->source}}</td>
        <td>{{ $student->date}}</td>
      
      
       
        
           
           <td>
            <form action = "{{route('student.destroy',$student->id)}}" method = "POST" onsubmit="if(!confirm('Are you sure')){return false;}">

            <input type = "hidden" name = "_method" value = "delete"> 
                    {{csrf_field()}}
                 
            
                <a href="{{route('student.show',$student->id)}}" tittle="view details" class="btn btn-sm " style="color:#0066ff";>
                    <i class="fas fa-eye"> </i>
                </a>
                
               
                <a href="{{route('student.edit',$student->id)}}" tittle="edit details" class="btn btn-sm " style="color:#ffc107";>
                    <i class="fas fa-edit"> </i>
                </a>
                
               
                   
                    <button type="submit"  class="btn  btn-sm " style="color:#cc0000";><i tittle="delete details" class="fa fa-trash"></i></button>
                </form>
                
           </td>
                
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