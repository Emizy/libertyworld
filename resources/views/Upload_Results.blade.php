@extends('layouts.master')

@section('content')

                <!-- page start-->
               
<!-- Content Start here -->
                           
                           @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">STUDENT'S RESULT UPLOAD</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('/UploadResult') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                        
                            <div class="form-group{{ $errors->has('studphoto') ? ' has-error' : '' }}">
                                <label for="studphoto" class="col-md-4 control-label">Student Picture</label>

                                <div class="col-md-6">
                                    <input id="studphoto" type="file" class="form-control" name="studphoto" required>

                                    @if ($errors->has('studphoto'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('studphoto') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('studname') ? ' has-error' : '' }}">
                                <label for="studname" class="col-md-4 control-label">Student Name:</label>

                                <div class="col-md-6">
                                    <input id="studname" type="text" class="form-control" name="studname" required>

                                    @if ($errors->has('studname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('studname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('stud_score') ? ' has-error' : '' }}">
                                <label for="stud_score" class="col-md-4 control-label">Total Score</label>

                                <div class="col-md-6">
                                    <input id="stud_score" type="text" class="form-control" name="stud_score" required>

                                    @if ($errors->has('stud_score'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('stud_score') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button style="background-color: #70389C; color: white;"  type="submit" class="btn btn-lg">
                                        Upload Result
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<!-- Content End here -->
                    </div>
                </div>

                

            </section>
@endsection
