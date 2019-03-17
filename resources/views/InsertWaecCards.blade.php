@extends('layouts.master')

@section('content')
<!--content-->
<!-- Start LOGIN BODY section -->
<div class="container">
            
    <div class="row">
        
        
        <div class="col-md-6 col-md-offset-2">
            @if ($message = Session::get('error'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">*</button>
      <strong>{{ $message }}</strong>
    </div>
  @endif

  @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #70389C; color: white;">::UPLOAD WAEC CARDS</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('UploadWaec') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('card_pin') ? ' has-error' : '' }}">
                            <label for="card_pin" class="col-md-4 control-label">Enter Pin</label>

                            <div class="col-md-6">
                                <input id="card_pin" type="text" class="form-control" name="card_pin" placeholder="Enter card_pin" value="{{ old('card_pin') }}" required autofocus>

                                @if ($errors->has('card_pin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('card_pin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ref_id') ? ' has-error' : '' }}">
                            <label for="ref_id" class="col-md-4 control-label">Enter Serial No</label>

                            <div class="col-md-6">
                                <input id="ref_id" type="text" class="form-control" name="ref_id" placeholder="Enter Serial No" value="{{ old('ref_id') }}" required autofocus>

                                @if ($errors->has('ref_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ref_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Enter Amount</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" placeholder="Enter card price" value="{{ old('price') }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="login_submit">

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn ">
                                    ADD WAEC NOW!
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