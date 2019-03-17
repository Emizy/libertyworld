@extends('layouts.app')

@section('content')

<!-- Start DASHBOARD BODY section -->
<div class="container" style="background-color: rgb(255, 255, 255); margin-top: 10px; padding-top: 5px; padding-bottom: 15px; width: 600px;">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel-heading" style="text-align: center; color: #69101e;"><h4><b><u> Read Account Details </u></b></h4></div>
    <dl class="dl-horizontal">
        <dt>Online Reg:</dt>
        <dd>{{$postaccount->reg}}</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Typing:</dt>
        <dd>{{$postaccount->typing}}</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Photocopy:</dt>
        <dd>{{$postaccount->photocopy}}</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Passport:</dt>
        <dd>{{$postaccount->passport}}</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Graphic:</dt>
        <dd>{{$postaccount->graphic}}</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Others:</dt>
        <dd>{{$postaccount->others}}</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Expenses:</dt>
        <dd>{{$postaccount->expenses}}</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Income:</dt>
        <dd>{{$postaccount->income}}</dd>
    </dl>

    <a style="text-align: center; color: #69101e;" href="/record" class="btn btn-default">Back</a>
</div>
</div>
</div>
<!-- End DASHBOARD BODY section -->
    

@endsection


