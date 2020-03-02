@extends('Layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('student.index')}}">Student</a></li>
          <li class="breadcrumb-item">Add student</li>
        </ol>
      </div>
    </div>
    <div class="0"></div>
  </div><!-- /.container-fluid -->
</section>

<div class="d-flex justify-content-center">
  <div class="col-md-8">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><b>Registration Form</b></h3>
      </div>

      <form role="form" action="{{route('student.store')}}" method="post">
        {{csrf_field()}}
        <div class="card-body">
          <div class="row">


            <div class="col-sm-2">
              <div class="form-group">
                <label for="title">Title</label>
                <select type="text" name="title" id="title" class="form-control" class="form-control" class="required">

                  <option selected>Mr</option>
                  <option>Mrs</option>
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
                <input type="text" name="phone_number" maxlength="10" id="exampleInputsource1" class="form-control" id="phone_number" pattern="(0){1}[0-9]{9}" autocomplete="phone_number" placeholder="Enter the Phone number" aria-describedby="exampleInputsource-error" aria-invalid="true" required>

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
                <input type="text" name="nic" maxlength="10" id="exampleInputsource1" class="form-control" id="nic" autocomplete="nic" placeholder="Enter the NIC number" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
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
          <a href="{{URL::previous()}}" class="btn bg-gradient-primary ">Back</a>
        </div>
      </form>



    </div>
  </div>
</div>


<script type="text/javascript">
  function showBatches(str) {


    var select = document.getElementById("batch_name");
    var length = select.options.length;
    for (i = length - 1; i >= 0; i--) {
      select.options[i] = null;
    }

    <?php
    foreach ($batches as $batch) {


    ?>
      if (str == '<?php echo $batch->course_name; ?>') {

        var select = document.getElementById("batch_name");
        select.options[select.options.length] = new Option('<?php echo $batch->batch_name; ?>', '<?php echo $batch->batch_name; ?>');
      }
    <?php
    }
    ?>


  }
</script>


@endsection