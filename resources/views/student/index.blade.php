@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="#"  class="btn btn-primary" tittle="show details" data-toggle="modal" data-target="#modal-add">
    <i class="fas fa-user-plus"></i> Register Student
   </a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
              
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
     
</section>

   <section class="content">
    <div class="row">
        <div class="col-md-12 ">
        
            <div class="card">

                <div class="card-header">
               
                    <h3 class="card-title">Student details </h3>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-responsive" >

                    <thead>
     <tr>
    
     <th >Title</th>
    <th >Student Name</th>
    <th >Gender</th>
    <th  >Email </th>
      
    <th >Phone Number</th>
    <th >NIC No</th> 
     
    <th>Course Name</th>
    <th>Batch Name</th>
    
    <th>Inquiry By</th>   
    <th>Inquiry Source</th> 
    <th>Transfer</th>  
    <th>Source</th>  
    <th> Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>  
    
    
    <th width="100px">Actions&nbsp;&nbsp;</th> 
    
     

    </tr>
    </thead>
    <body>
    @foreach ($students as $student)
    <tr>
      
    <td>{{ $student->title}}</td>

        <td>{{ $student->name}}</td>
        <td>{{ $student->gender}}</td>

        <td >{{ $student->email}}</td>
        <td>{{ $student->phone_number}}</td>
        <td>{{ $student->nic}}</td>

        <td >{{ $student->course_name}}</td>
        <td >{{ $student->batch_name}}</td>
        <td>{{ $student->inquiry_by}}</td>
        <td >{{ $student->inquiry_source}}</td>
        <td >{{ $student->transfer}}</td>
        <td >{{ $student->source}}</td>
        <td>{{ $student->registration_date}}</td>
      
      
       
    
           <td width="100px">
           <form action = "{{route('student.destroy',$student->id)}}" method = "POST" onsubmit="if(!confirm('Are you sure')){return false;}">

            
                
               
                <a href="{{route('student.edit',$student->id)}}" tittle="edit details" class="btn btn-sm " style="color:#ffc107";>
                    <i class="fas fa-edit"> </i>
                </a>
                
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}} 
     
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


  
<div class="modal fade" id="modal-add">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Student Registration</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="{{route('student.store')}}" method="post" role="form">
        {{csrf_field()}}
        <div class="card-body">
          <div class="row">


            <div class="col-sm-2">
              <div class="form-group">
                <label for="title">Title</label>
                <select type="text" name="title" id="title" class="form-control" class="form-control" class="required">

                  <option selected>Mr</option>
                  <option>Miss</option>
                  <option>Mrs</option>
                  <option>Dr</option>
                </select>

              </div>
            </div>

            <div class="col-sm-10">
              <!-- text input -->
              <div class="form-group">
                <label for="student_name">Student Name</label>

                <input type="text" name="student_name" class="form-control" autocomplete="student_name" id="exampleInputStudent_name1" placeholder="Enter the Student Name" aria-describedby="exampleInputstudent_name-error" aria-invalid="true" required>
              </div>
            </div>

            <div class="col-sm-8">
              <div class="form-group">
                <label for="course_name">Course Name</label>
                <select type="text" name="course_name" id="course_name" class="form-control" onmousedown="this.value='';" onchange="showBatches(this.value);" required>

                  @foreach ($courses as $course)
                  <option>{{$course->course_name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="batch_name">Batch</label>
                <select type="text" name="batch_name" id="batch_name" class="form-control" class="form-control" class="required">

                  @foreach ($batches as $batch)
                  <option>{{$batch->batch_name}}</option>
                  @endforeach
                </select>

              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <label>Phone number</label>
                <input type="text" name="phone_number" maxlength="13" id="exampleInputsource1" class="form-control" id="phone_number"  autocomplete="phone_number" placeholder="Enter the Phone number" aria-describedby="exampleInputsource-error" aria-invalid="true" required>

              </div>
            </div>

            <div class="col-sm-7">
              <div class="form-group">
                <label for="email_id">Email</label>
                <input type="email" name="email_id" class="form-control" autocomplete="email_id" id="exampleInputemail_id1" placeholder="Enter your email" aria-describedby="exampleInputEmail1-error" aria-invalid="true" required>
              </div>
            </div>


            <div class="col-sm-4">
              <div class="form-group">
                <label for="gender">Gender</label>
                <select type="text" name="gender" id="gender" class="form-control" class="form-control" class="required">

                  <option selected>Male</option>
                  <option>Female</option>
                </select>

              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label for="nic">NIC</label>
                <input type="text" name="nic" maxlength="13" id="exampleInputsource1" class="form-control"  pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$"id="nic" autocomplete="nic" placeholder="Enter the NIC number" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
              </div>
            </div>


            <div class="col-sm-3">
              <div class="form-group">
                <label for="inquiry_source">Inquiry source</label>
                <select type="text" name="inquiry_source" id="inquiry_source" class="form-control" class="form-control" class="required">

                  <option selected>Call</option>
                  <option>Walk In</option>
                  <option>Others</option>
                </select>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label for="transfer">Transfered</label>
                <select type="text" name="transfer" id="transfer" class="form-control" class="form-control" class="required">

                  <option value="Yes">Yes</option>
                  <option value="no" selected>No</option>
                  <select>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label for="source">Source</label>
                <select type="text" name="source" id="source" class="form-control" class="form-control" class="required">

                  <option selected>Call</option>
                  <option>Walk In</option>
                  <option>Web</option>
                  <option>From Cordinator</option>
                  <option>From student</option>
                  <option>From Branch</option>
                  <option>Others</option>
                  <select>
              </div>
            </div>


          </div>
        </div>
        <div class="card-footer">
          <input type="submit" class=" float-right btn bg-gradient-success " value="register">
        </div>
    </form>
  </div>

</div>




@endsection
