@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
               <li class="breadcrumb-item">Profile</a></li>
             
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>

    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('dist/img/avatar5.png')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
@foreach($users as $user)
                <p class="text-muted text-center">{{$user->email}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Languages</b> <a class="float-right">{{$user->languages}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile No</b> <a class="float-right">{{$user->mobile_number}}</a>
                  </li>
@endforeach
@foreach($users1 as $user1)
                  <li class="list-group-item">
                    <b>Total inquiries</b> <a class="float-right">{{$user1->count}}</a>
                  </li>
                  @endforeach
                  @foreach($users2 as $user2)
                  <li class="list-group-item">
                    <b>Total Registrations</b> <a class="float-right">{{$user2->count}}</a>
                  </li>
                  @endforeach
                </ul>
               
                <a href="{{route('inquiry.create')}}" class="btn btn-primary btn-block"><b>Add inquiry</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

         
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  
                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab" >Settings</a></li>
                <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab" >Password Change</a></li>

                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="settings">
                       @foreach($users as $user)
                     <form class="form-horizontal"action = "{{route('profile.update',$user->id)}}" method = "POST"class="needs-validation" validate>
                        <input type = "hidden" name = "_method" value="put">
                        {{csrf_field()}}
                          <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" name ="name" id ="name"class="form-control"  value="{{Auth::user()->name}}"required>
                              <div class="invalid-feedback">
                                    Please Enter valid Staff Name .
                                </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" name ="email" id ="email"class="form-control"  value="{{$user->email}}"required>
                              <div class="invalid-feedback">
                                  Please Enter valid Email.
                                </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="mobile_number" class="col-sm-2 col-form-label">Mobile No</label>
                            <div class="col-sm-10">
                              <input type="text"name="mobile_number" class="form-control" id="mobile_number"pattern="[077][0-9]{9}" maxlength="10" value="{{$user->mobile_number}}"required>
                              <div class="invalid-feedback">
                                    Please Enter valid phone number.
                                </div>
            
                            </div>
                          </div>
                          <div class="form-group row">
                          <label for ="languages" class="col-sm-2 col-form-label">Language</label>
                          <div class="col-sm-10">
                                <select type ="text" name ="languages[]" id ="languages"class="form-control" multiple required>
                            
                                <option >English</option>
                                <option>Tamil</option>
                                <option  >Sinhala</option>
                                </select>
                            </div>
                          </div>
                          
                          @endforeach
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
                    </form>
                  </div>
                  <div class="tab-pane" id="activity">
                    @foreach($users as $user)
                    <form class="form-horizontal"action = "{{route('profile.update',$user->id)}}" method = "POST"class="needs-validation" validate>
                      <input type = "hidden" name = "_method" value="put">
                      {{csrf_field()}}
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" name="password" class="form-control" id="password" minlength="6" placeholder="enter password" >
                          <div class="invalid-feedback">
                                minimum password length should be six.
                            </div>
                        </div>
                      </div>
                      @endforeach
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <script>
  (function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
</script>
   
 @endsection
