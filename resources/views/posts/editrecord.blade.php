@extends('layouts.app')

@section('content')

<!-- Start DASHBOARD BODY section -->
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif
<nav class="navbar navbar-default" style="background-color: #38010a">
    <div class="container-fluid" >
        <div class="navbar-header" >
            <a class="navbar-brand" style="background-color: #38010a" href="{{url('/')}}"><div class="mynav" style="color: whitesmoke"><marquee>LIBERTY WORLD OF DIGITAL SOLUTION</marquee></div></a>
        </div>

        <ul class="nav navbar-nav">
            <div class="company" style="color: #f2e180"><h2>GOD'S LIBERTY COMPUTER INSTITUTION NIG. (LTD.)</h2></div>
        </ul>

    </div>
</nav>
<div class="row">
    <div class="col-md-6 col-md-offset-3" style="border-style: double solid; border-width: 7px 7px 7px 7px; border-color: #771f0a; padding-left: 0px; padding-right: 0px; box-shadow: #0f0f0f">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #771f0a; color: whitesmoke;"><marquee>Great-Liberty -> "Forever to Excel...")=> 'I shall be great, I will be lifted, It Shall be well with me.'</marquee></div>
            <div class="panel-heading" style="text-align: center; color: #69101e;";><h3><b> LIBERTY ACCOUNT CRUD APP</b></h3></div>
            <div class="panel-body" style="background-color: #f6f7b7">
                <h3><b>Edit Account Details</b></h3>
                
                <form method="post" action="/update/{{$postaccount->id}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="reg">Online Reg:</label>
                        <input type="text"  value="{{$postaccount->reg}}" name="reg" placeholder="Online Reg" class="form-control" id="online_reg" >
                    </div>

                    <div class="form-group">
                        <label for="typing">Typing:</label>
                        <input type="text" value="{{$postaccount->typing}}" name="typing" placeholder="Typing" class="form-control" id="typing" >
                    </div>

                    <div class="form-group">
                        <label for="photocopy">Photocopy:</label>
                        <input type="text" value="{{$postaccount->photocopy}}" name="photocopy" placeholder="Photocopy" class="form-control" id="photocopy">
                    </div>
                    <div class="form-group">
                        <label for="passport">Passport:</label>
                        <input type="text" value="{{$postaccount->passport}}" name="passport" placeholder="Passport" class="form-control" id="passport" >
                    </div>
                    <div class="form-group">
                        <label for="graphic">Graphic:</label>
                        <input type="text"  value="{{$postaccount->graphic}}" name="graphic" placeholder="Graphic" class="form-control" id="graphics" >
                    </div>
                    <div class="form-group">
                        <label for="others">Others:</label>
                        <input type="text" value="{{$postaccount->others}}" name="others" placeholder="Others" class="form-control" id="others" >
                    </div>
                    <div class="form-group">
                        <label for="expenses">Expenses:</label>
                        <input type="text" value="{{$postaccount->expenses}}" name="expenses" placeholder="Expenses" class="form-control" id="expenses" >
                    </div>
                    <div class="form-group">
                        <label for="income">Income:</label>
                        <input type="text" value="{{$postaccount->income}}" name="income" placeholder="Income" class="form-control"  id="income">
                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color: #771f0a;">Submit</button>
                    <button style="background-color: #771f0a;" type="submit" class="btn btn pull-right" ><a href="/record" style="color:white;">Back</a></button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- End DASHBOARD BODY section -->
    

 @endsection