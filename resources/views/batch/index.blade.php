@extends('layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <a href="#" class="btn  btn-primary" tittle="show details" data-toggle="modal" data-target="#modal-add">
          <i class="fas fa-plus"></i>
          Add Batch
        </a>


      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Batch</li>

        </ol>
      </div>
    </div>
    <div class="0"></div>
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Batch Details</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-fixed">
            <thead>
              <tr>

                <th>Course Name </th>
                <th>Batch Name </th>
                <th>Registration date</th>
                <th>Start by</th>
                <th>End by</th>
                <th>Actions</th>

              </tr>
            </thead>

            <body>
              @foreach ($batches as $batch)
              <tr>

                <td>{{ $batch->course_name}}</td>
                <td>{{ $batch->batch_name}}</td>

                <td>{{ $batch->registration_date}}</td>
                <td>{{ $batch->start_by}}</td>
                <td>{{ $batch->end_by}}</td>





                <td>
                  <form action="{{route('batch.destroy',$batch->id)}}" method="POST" onsubmit="if(!confirm('Are you sure')){return false;}">


                    <input type="hidden" name="_method" value="edit">
                    <a href="{{route('batch.edit',$batch->id)}}" tittle="edit details" class="btn btn-sm" style="color:#ffc107" ;>
                      <i class="fa fa-edit"></i></a>

                    <input type="hidden" name="_method" value="delete">
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-sm" style="color:#cc0000" ;>
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



<div class="modal fade" id="modal-add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Create Batch</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="{{route('batch.store')}}" method="post" role="form">
          {{csrf_field()}}
          <div class="row">

            <div class="col-sm-8">
              <div class="form-group">
                <label for="course_name">Course Name</label>
                <select type="text" name="course_name" id="course_name" class="form-control" class="required" onmousedown="if(this.options.length>5){this.size=5;}" onchange='this.size=0;' onblur="this.size=0;">

                  @foreach ($courses as $course)
                  <option>{{$course->course_name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label for="registration_date">Registraion Date</label>
                <input type="date" name="registration_date" id="registration_date" class="form-control" autofocus placeholder="Enter the Registration Date" id="exampleInputRegistration_date1" aria-describedby="exampleInputregistration_date-eror" airia-invalid="true" required>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">

                <label for="start_by">Start By</label>

                <input type="date" name="start_by" id="start_by" class="form-control" autofocus placeholder="Enter the Start Date" id="exampleInputStart_by1" aria-describedby="exampleInputstart_by-eror" airia-invalid="true" required>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">

                <label for="end_by">End By</label>

                <input type="date" name="end_by" id="end_by" class="form-control" autofocus placeholder="Enter the End Date" id="exampleInputEnd_by1" aria-describedby="exampleInputend_by-eror" airia-invalid="true" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="batch_name">Batch Name</label>
                <input type="text" name="batch_name" id="batch_name" autocomplete="batch_name" class="form-control" maxlength="100" placeholder="Enter the Batch Name" id="exampleInputBatch_name1" aria-describedby="exampleInputbatch_name-eror" airia-invalid="true" required>
              </div>
            </div>


          </div>


      </div>
      <div class="card-footer">
        <input type="submit" class="btn btn-success float-right" value="Create">
      </div>
    </div>
    </form>
  </div>

</div>



@endsection