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
          <li class="breadcrumb-item active"><a href="{{route('staff.index')}}">Staff</a></li>
          <li class="breadcrumb-item">Add Staff</li>
        </ol>
      </div>
    </div>
    <div class="0"></div>
  </div><!-- /.container-fluid -->
</section>



<form method="POST" action="{{ route('register') }}">
  {{ csrf_field() }}
  <div>
    <div class="d-flex justify-content-center">
      <div class="col-md-8">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"><b>Add Staff</b> </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form role="form">
              <div class="row">

                <div class="col-md-2{{ $errors->has('title') ? ' has-error' : '' }} form-group">
                  <label for="title">Title</label>
                  <select type="text" name="title" id="title" class="form-control" required>
                    <option selected>Mr</option>
                    <option>Miss</option>
                    <option>Mrs</option>
                    <option>Dr</option>
                  </select>
                </div>


                <div class="col-md-4{{ $errors->has('name') ? ' has-error' : '' }} form-group">
                  <label for="name">Staff Name</label>
                  <input type="text" name="name" id="exampleInputsource1" id="name" autocomplete="name" placeholder="Enter the Staff Name" class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>

                </div>
                @if ($errors->has('name'))
                <span class="form-control is-invalid help-block" style="color:red">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
                <div class="col-md-2 form-group">
                  <label for="gender">Gender</label>
                  <select type="text" name="gender" id="gender" class="form-control" class="required">
                    <option selected>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div class="col-sm-4">

                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="exampleInputdate1" class="form-control" placeholder="Enter date of bitrh" aria-describedby="exampleInputdate-error" aria-invalid="true" required></span>

                  </div>
                </div>
                <div class="col-md-6{{ $errors->has('nic') ? ' has-error' : '' }} form-group">
                  <label for="nic">NIC Number</label>
                  <input type="text" name="nic" maxlength="13" autocomplete="nic" pattern="^([0-9]{9}[x|X|v|V]|[0-9]{12})$" id="nic" placeholder="Enter the nic  " class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>

                </div>
                <div class="col-md-6{{ $errors->has('email') ? ' has-error' : '' }} form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="exampleInputsource1" id="email" autocomplete="email" placeholder="Enter the email" class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>

                </div>
                @if ($errors->has('email'))
                <span class=" form-control is-invalid help-block" style="color:red">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <div class="col-md-6 form-group">
                  <label for="address">Address</Address></label>
                  <input type="address" name="address" id="exampleInputsource1" id="address" autocomplete="address" placeholder="Enter the address" class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>

                </div>
                <div class="col-md-6{{ $errors->has('languages') ? ' has-error' : '' }} form-group">
                  <label for="languages">Language</label>
                  <select type="text" name="languages[]" id="languages" class="form-control" multiple>
                    <option value="English" selected>English</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Sinhala">Sinhala</option>
                  </select>
                </div>
                @if ($errors->has('languages'))
                <span class=" form-control is-invalid help-block" style="color:red">
                  <strong>{{ $errors->first('languages') }}</strong>
                </span>
                @endif

                <div class="col-md-6{{ $errors->has('mobile_number') ? ' has-error' : '' }} form-group">
                  <label for="mobile_number">Mobile Number</label>
                  <input type="text" name="mobile_number" maxlength="13" autocomplete="mobile_number" id="exampleInputsource1" id="mobile_number" placeholder="Enter the mobile number  " class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>

                </div>
                @if ($errors->has('mobile_number'))
                <span class="form-control is-invalid help-block" style="color:red">
                  <strong>{{ $errors->first('mobile_number') }}</strong>
                </span>
                @endif
                <div class="col-md-6{{ $errors->has('password') ? ' has-error' : '' }} form-group">
                  <label for="password">Password</label>
                  <input type="text" name="password" id="exampleInputsource1" id="password" autocomplete="off" placeholder="Enter password  " class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>

                </div>
                @if ($errors->has('password'))
                <span class="need-validation help-block" style="color:red">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif



                <div class="col-sm-6 form-group">
                  <label for="password">Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>

                </div>
              </div>
              @if ($errors->has('password'))
              <span class="form-control is-invalid help-block" style="color:red">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
              <div class="col-md-6{{ $errors->has('type') ? ' has-error' : '' }} form-group">
                            <label for="type">Role</label>
                            <select type="text" name="type" id="type" class="form-control">
                                <option value="Admin">Admin</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>


              <div class="card-footer">
                <a href="{{URL::previous()}}" class="btn bg-gradient-primary float-left " href="#">Back</a>
                <button type="submit" value="Save" class="btn btn-success float-right">Save </button>

              </div>
              <!-- /.form-box -->
          </div><!-- /.card -->
        </div>
        <!-- /.register-box -->


        @endsection