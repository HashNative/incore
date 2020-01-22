@extends('layouts.master')
@section('content')


 <!-- Main content -->
 <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="card">
            <div class="card-header">
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                
    <a href="{{route('inquiry.create')}}" tittle="Add">
    <button type="button" class="btn btn-primary">+ Add Inquiry</button>
            </a>
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
           <a href="{{route('inquiry.show',$inquiry->id)}}" tittle="show details" class="btn btn-sm fa fa-eye" style="color:#0066ff";></a>
       
        
            <a href="{{route('inquiry.edit',$inquiry->id)}}" tittle="edit details" class="btn btn-sm fa fa-edit" style="color:#009933";></a>
            
            
            <form action = "{{route('inquiry.destroy',$inquiry->id)}}" method = "POST"onsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit" class="btn btn-sm" ><i tittle="delete details" class="fa fa-trash" style="color:#cc0000";></i></button>
            
            </form>
            

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