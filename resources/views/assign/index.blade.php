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
              <h3 class="card-title">ToDo Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-fixed">
                    <thead>
                    <tr>
                 
                    <th>Scheduled Date </th>
                    <th>Language</th>
                    

                    </tr>
                    </thead>
                    <body>
                    @foreach ($assigns as $assign)
                    <tr>
                       
                        <td>{{ $assign->schedule_date}}</td>
                        <td>{{ $assign->language}}</td>
                        
                       
                        



        <td>
        <form action = "{{route('assign.destroy',$assign->id)}}" method = "POST"onsubmit="if(!confirm('Are you sure')){return false;}">


           <input type = "hidden" name = "_method" value="edit">
           
            <a href="{{route('assign.show',$assign->inquiry_id)}}" tittle="edit details"class="btn btn-sm"style="color:#ffc107";>
            <i class="fa fa-info"></i></a>

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