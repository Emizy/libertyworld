@extends('layouts.master')

@section('content')
<style type="text/css">
    .nav-item { padding-top: 10px; padding-bottom: 10px; background-color: #15549a; font-size: 12px; color: white; font-weight: 500; text-transform: uppercase; }

</style>
<div class="container" style="margin-top: 60px;">
    

<div class="col-md-8 col-md-offset-2">
<ul class="nav nav-tabs nav-justified md-tabs indigo" id="myTabJust" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="home-just"
      aria-selected="true"><h2 style="color: #83bcfa;">REGISTER</h2></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="profile-just"
      aria-selected="false"><h2 style="color: #83bcfa;"> LOGIN</h2></a>
  </li>
  
</ul>
<div class="tab-content card pt-5" id="myTabContentJust" style="padding: 0px !important">
  <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Enter FullName</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Enter UserName</label>

                            <div class="col-md-10">
                                <input id="username" type="text" class="form-control" name="username" placeholder="Enter your username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-4 control-label">Enter Phone No:</label>

                            <div class="col-md-10">
                                <input id="telephone" type="text" class="form-control" name="telephone" placeholder="Enter your phone no" value="{{ old('telephone') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Enter E-Mail:</label>

                            <div class="col-md-10">
                                <input id="email" type="text" class="form-control" name="email" placeholder="Enter your E-Mail" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter your Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm_password"required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="login_submit">

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button style="background-color: #70389C; color: white;" type="submit" class="btn ">
                                    Create Account
                                </button>

                                <a style="margin: 0 auto;display: table;" href="{{ route('password.request') }}">
                                    Forgot Your Password
                                </a>
                            </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
    
  </div>
  </div>
  </div>
  <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
    <div class="panel-body">
    <form class="form-horizontal" method="POST" action="{{ route('login.custom') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">UserName</label>

                            <div class="col-md-10">
                                <input id="username" type="text" class="form-control" name="username" placeholder="Enter your username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-10">
                                <input id="password" type="password" placeholder="Enter your password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="login_submit">

                        <div class="form-group">
                            <div class="col-md-10">
                                <button style="background-color: #70389C; color: white;" type="submit" class="btn ">
                                    Login
                                </button>

                                <a style="margin: 0 auto;display: table;" href="{{ route('password.request') }}">
                                    Forgot Your Password
                                </a>
                            </div>
                            </div>
                        </div>
                    </form>
  </div>
  </div>
  
</div>
</div>
</div>



   </div>
@endsection