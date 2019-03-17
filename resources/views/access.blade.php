@extends('layouts.app')

@section('content')

<!--content-->
<!-- Start LOGIN BODY section -->
<div class="container">
  @if ($message = Session::get('error'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">*</button>
      <strong>{{ $message }}</strong>
    </div>
  @endif
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #70389C; color: white;">::LIBERTY MANAGEMENT ACCESS PAGE</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="GET" action="{{ route('checkCode') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-4 control-label">Enter code</label>

                            <div class="col-md-6">
                                <input id="code" type="password" class="form-control" name="code" placeholder="Enter your access code" value="{{ old('code') }}" required autofocus>

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="login_submit">

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn ">
                                    CONTINUE
                                </button>
<br>
<br>
                                
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End LOGIN BODY section -->
   
@endsection
