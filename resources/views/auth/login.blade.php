<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Incore | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Incore</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        

                       <!-- <div class="input-group mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>-->
                               
                            <div class="input-group mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                             <input id="email" type="email" class="form-control"  name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                <div class="input-group-append">
                                  <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                     </div>
                                  </div>
                             </div>
                           <!-- <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> -->

                                @if ($errors->has('email'))
                                    <span  class="fas fa-envelope">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                         
                        <div class="input-group mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
                              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                              <div class="input-group-append">
                                 <div class="input-group-text">
                                 <span class="fas fa-lock"></span>
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                              </div>
                             </div>
                        
                        <div class="row">
                        <div class="col-8">
                           <div class="icheck-primary">
                                <label >
                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                               
                                      Remember Me
                                 </label>
                                  </div>
                                </div>
                           </div>

                 
            
                        <div class="col-4">
                         
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>

                         </div>
                       
                    </form>
                    <div class="social-auth-links text-center mb-3">
        
        
      </div>
      <!-- /.social-auth-links -->
    
      <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
      </p>
      <p class="mb-1">
        <a href="{{ route('staff.create') }}">ghfrthy</a>
      </p>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>

