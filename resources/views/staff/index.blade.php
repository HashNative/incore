@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          
          
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Staff</li>
              
            </ol>
          </div>
        </div><div class="0"></div> 
      </div><!-- /.container-fluid -->
      <a href="{{route('staff.create')}}" class="btn btn-primary btn-flat  fa-" tittle="Add"> <i class="fas fa-plus"></i>
    Add Staff
</a>
</section>




<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Staff &nbsp; 
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                 <table id="example1"  class="table table-bordered table-striped ">
                 

                    <thead>

<tr>

    <th>Staff Name </th>
    <th>Email</th>
    <th>Languages</th>
    
    <th>Mobile Number</th>
    <th>Actions</th>

</tr>
</thead>
<tbody>
@foreach ($staffs as $staff)
<tr>
    
    <td>{{ $staff->staff_name}}</td>
    <td>{{ $staff->email}}</td>
    
    <td>{{ $staff->languages}}</td>
    
    <td>{{ $staff->mobile_number}}</td>


                     <td>
                    
                    <form action = "{{route('staff.destroy',$staff->id)}}" method = "POST" onsubmit="if(!confirm('Are you sure')){return false;}">
                       
                        <input type = "hidden" name = "_method" value = "delete"> 
                            
                            {{csrf_field()}}
                        
                            
                        <a href="{{route('staff.edit',$staff->id)}}" tittle="edit details"class=" btn btn-sm fas fa-edit"style="color:#ffc107";>
                            
                        <button type="submit"class="btn btn-sm" ><i tittle="delete details"class= "fa fa-trash"style="color:#cc0000";></i></button></form>
                   
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