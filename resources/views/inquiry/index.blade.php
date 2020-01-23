@extends('layouts.master')
@section('content')

<a href="{{route('inquiry.create')}}"  class="btn  btn-primary" tittle="show details">
    <i class="fas fa-plus"></i> New inquiry
     </a>
 <!-- Main content -->
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
              <th>Source</th>
              <th>Type </th>
              <th>Description</th>
              <th>Staff ID</th>
              <th>Student Id</th>
              <th>Date Time</th>  
              <th>Actions</th>  

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
                    
                  <form action = "{{route('inquiry.destroy',$inquiry->id)}}" method = "POST" onsubmit="if(!confirm('Are you sure')){return false;}">
                          <input type = "hidden" name = "_method" value = "delete"> 
                          
                          {{csrf_field()}}
                          <a href="{{route('inquiry.edit',$inquiry->id)}}" tittle="edit details"class=" btn btn-sm fas fa-edit"style="color:#009933";>    
                      
                          <button type="submit"class="btn btn-sm" ><i tittle="delete details"class= "fa fa-trash"style="color:#cc0000";></i></button>

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