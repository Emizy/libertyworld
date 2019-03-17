@extends('layouts.master')

@section('content')

<!-- Start DASHBOARD BODY section -->
<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2" >
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #70389C; color: white;">UPLOAD DOCUMENTS</div>

                    <div class="panel-body">
                       <div class="row">
                           <form class="form-horizontal" method="POST" action="{{ url('/UploadDoc') }}" enctype="multipart/form-data">
                               {{ csrf_field() }}

                               <div class="form-group{{ $errors->has('file_title') ? ' has-error' : '' }}">
                                   <label for="file_title" class="col-md-4 control-label">Title</label>

                                   <div class="col-md-6">
                                       <input id="file_title" type="text" class="form-control" name="file_title" placeholder="Enter File Name" value="{{ old('file_title') }}" required autofocus>

                                       @if ($errors->has('file_title'))
                                           <span class="help-block">
                                        <strong>{{ $errors->first('file_title') }}</strong>
                                    </span>
                                       @endif
                                   </div>
                               </div>

                               <div class="form-group{{ $errors->has('post_body') ? ' has-error' : '' }}">
                                   <label for="post_body" class="col-md-4 control-label">Post Body</label>

                                   <div class="col-md-6">
                                       <textarea id="post_body" rows="7" class="form-control" name="post_body" value="{{ old('post_body') }}" required></textarea>

                                       @if ($errors->has('post_body'))
                                           <span class="help-block">
                                        <strong>{{ $errors->first('post_body') }}</strong>
                                    </span>
                                       @endif
                                   </div>
                               </div>

                               <div class="form-group{{ $errors->has('file_name') ? ' has-error' : '' }}">
                                   <label for="file_name" class="col-md-4 control-label">File Upload</label>

                                   <div class="col-md-6">
                                       <input id="file_name" type="file" class="form-control" name="file_name" required>

                                       @if ($errors->has('file_name'))
                                           <span class="help-block">
                                        <strong>{{ $errors->first('file_name') }}</strong>
                                    </span>
                                       @endif

                                   </div>
                               </div>

                               <div class="form-group">
                                   <div class="col-md-6 col-md-offset-4">
                                       <button style="background-color: #70389C; color: white;" type="submit" class="btn btn btn-large btn-block">
                                           Upload File
                                       </button>
                                   </div>
                               </div>
                           </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End DASHBOARD BODY section -->
   
 @endsection

 
 