@extends('layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <a href="#" class="btn  btn-primary" tittle="show details" data-toggle="modal" data-target="#modal-add">
          <i class="fas fa-plus"></i>
          Add Course
        </a>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Course</li>

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
          <h3 class="card-title">Course Details</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-fixed">
            <thead>
              <tr>

                <th>Course Name </th>
                <th>Course fees</th>
                <th>Description</th>
                <th>Actions</th>

              </tr>
            </thead>

            <body>
              @foreach ($courses as $course)
              <tr>

                <td>{{ $course->course_name}}</td>
                <td>{{ $course->course_fees}}</td>
                <td style="width: 40em; word-break: break-all">{{ $course->description}}</td>




                <td>
                  <form action="{{route('course.destroy',$course->id)}}" method="POST" onsubmit="if(!confirm('Are you sure')){return false;}">


                    <input type="hidden" name="_method" value="edit">
                    <a href="{{route('course.edit',$course->id)}}" tittle="edit details" class="btn btn-sm" style="color:#ffc107" ;>
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
        <h4 class="modal-title">Add Course</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="{{route('course.store')}}" method="post" role="form">
          {{csrf_field()}}

          <div class="row">

            <div class="col-sm-6">
              <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" name="course_name" id="course_name" autocomplete="course_name" class="form-control" maxlength="100" placeholder="Enter the Course Name" id="exampleInputCourse_name1" aria-describedby="exampleInputcourse_name-eror" airia-invalid="true" required>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label for="course_fees">Course Fees</label>
                <input type="number" name="course_fees" id="course_fees" class="form-control" autocomplete="course_fees" autofocus placeholder="Enter the Course Fees" id="exampleInputCourse_fees1" aria-describedby="exampleInputcourse_fees-eror" airia-invalid="true" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" autocomplete="description" autofocus placeholder="Enter the Description" id="exampleInputDescription1" aria-describedby="exampleInputdescription-eror" airia-invalid="true" required></textarea>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <input type="submit" class="btn btn-success float-right" value="Create">
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
  @endsection