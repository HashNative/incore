@extends('layouts.master')
@section('content')

<br>
    <a href="{{route('student.create')}}"  class="btn  btn-primary" tittle="show details">
    <i class="fas fa-user-plus"></i> Student Register 
     </a>
    
     <section class="content">
      <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
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