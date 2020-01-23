@extends('layouts.master')
@section('content')


 <!-- Main content -->
 <section class="content">
      <div class="row">
        <div class="col-12">
         
         
            <!-- /.card-header -->
            
                
    <a href="{{route('inquiry.create')}}" class="btn btn-primary btn-flat fa-" title="
    add"> <i class="fas fa-plus"></i>   Add inquiry
            </a>

            <div class="col-sm-12 col-md-4 float-right">
   <div class="row"><div class="col-sm-8 col-md-6" ><div class="dataTables_length" id="example1_length">
   <label>Show  entries <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div>
   
   <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div>
</div>
     <table class="table table-bordered table-striped dataTable">
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
  
          
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection