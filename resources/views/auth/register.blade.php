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
              <li class="breadcrumb-item">AddStaff</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>
  


<form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div >
    <div class="d-flex justify-content-center">
    <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Staff </h3>
              </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form role="form">
                  <div class="row">
            
                        <div class="col-md-6{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for ="name">Staff Name</label>
                                <input type ="text" name ="name" id="exampleInputsource1"  id ="name"  placeholder="Enter the Staff Name"class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
                            
                        </div>
                                @if ($errors->has('name'))
                                    <span class="help-block"style="color:red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                     
                        <div class="col-md-6{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for ="email">Email</label>
                            <input type ="email" name ="email" id="exampleInputsource1"  id ="email" placeholder="Enter the email"class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
                        
                        </div>
                        @if ($errors->has('email'))
                                    <span class="help-block"style="color:red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                        <div class="col-md-6{{ $errors->has('languages') ? ' has-error' : '' }}">
                                <label for ="languages">Language</label>
                                    <select type ="text" name ="languages" id ="languages" class="form-control" >
                                    <option value="english" selected >English</option>
                                    <option value="tamil">Tamil</option>
                                    <option value="sinhala">Sinhala</option></select>
                        </div> 
                                @if ($errors->has('languages'))
                                    <span class="help-block"style="color:red">
                                        <strong>{{ $errors->first('languages') }}</strong>
                                    </span>
                                @endif 

                        <div class="col-md-6{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                                <label for ="mobile_number">Mobile Number</label>
                                <input type ="integer" name ="mobile_number"  maxlength="10" pattern="[0-9]{1}[0-9]{9}" id="exampleInputsource1"  id ="mobile_number"   placeholder="Enter the mobile number  "class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
                
                        </div>  
                        <div class="col-md-12{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for ="password">Password</label>
                            <input type ="text" name ="password" id="exampleInputsource1" id ="password"   placeholder="Enter password  "class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required >
                            
                        </div> 
                                @if ($errors->has('password'))
                                    <span class="help-block"style="color:red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                
                                
                             
                    <div class="col-sm-12">
                    <label for ="password">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"required>
                            
                        </div>
                    </div>
                                 @if ($errors->has('password'))
                                    <span class="help-block"style="color:red">
                                        <strong >{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                

                                <div class="card-footer">
                                <a href ="{{URL::previous()}}" class="btn bg-gradient-primary float-left " href="#">Back</a> 
                                <button type ="submit"  value="Save" class="btn btn-success float-right">Save </button>    

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->


@endsection

