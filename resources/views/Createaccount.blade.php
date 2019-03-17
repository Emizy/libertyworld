@extends('layouts.app')

@section('content')

<!-- Start DASHBOARD BODY section -->
<div class="container" style="color: black;">
   
        
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif
   
                <div class="row">
                    <div class="col-md-6 col-md-offset-2" style="border-style: double solid; border-width: 7px 7px 7px 7px; border-color: #771f0a; padding-left: 0px; padding-right: 0px; box-shadow: #0f0f0f">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: #771f0a; color: whitesmoke;"><marquee>(Great-Liberty -> "Forever to Excel...")</marquee></div>
                            <div class="panel-heading" style="text-align: center; color: #69101e;";><h3><b> LIBERTY ACCOUNT CRUD APP</b></h3></div>
                            <div class="panel-body" style="background-color: #f6f7b7">
            <h4>Insert New Account</h4>
            <form method="post" action="{{ url('/Createaccount/store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="reg">Online Reg:</label>
                    <input type="text"  name="reg" placeholder="Online Reg" class="form-control" id="online_reg" value="0">
                </div>

                <div class="form-group">
                    <label for="typing">Typing:</label>
                    <input type="text"  name="typing" placeholder="Typing" class="form-control" id="typing" value="0">
                </div>

                <div class="form-group">
                    <label for="photocopy">Photocopy:</label>
                    <input type="text"  name="photocopy" placeholder="Photocopy" class="form-control" id="photocopy" value="0">
                </div>
                <div class="form-group">
                    <label for="passport">Passport:</label>
                    <input type="text"  name="passport" placeholder="Passport" class="form-control" id="passport" value="0">
                </div>
                <div class="form-group">
                    <label for="graphic">Graphic:</label>
                    <input type="text"  name="graphic" placeholder="Graphic" class="form-control" id="graphics" value="0">
                </div>
                <div class="form-group">
                    <label for="others">Others:</label>
                    <input type="text"  name="others" placeholder="Others" class="form-control" id="others" value="0">
                </div>
                <div class="form-group">
                    <label for="expenses">Expenses:</label>
                    <input type="text" name="expenses" placeholder="Expenses" class="form-control" id="expenses" value="0">
                </div>
                <div class="form-group">
                    <label for="income">Income:</label>
                    <input type="text" name="income" placeholder="Income" class="form-control" readonly="true" value="0" id="income">
                </div>

                <button type="submit" class="btn btn-primary" style="background-color: #771f0a;">Submit</button>
                <button style="background-color: #771f0a;" type="submit" class="btn btn pull-right" ><a href="/record" style="color:white;">Back</a></button>
            </form>
        </div>

        </div>
    </div>
    </div>
    <script src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript">
        $(document).on("change keyup",'#online_reg',function(){
            var reg  = parseFloat($('#online_reg').val());
            var typ  = parseFloat($('#typing').val());
            var pho  = parseFloat($('#photocopy').val());
            var pas  = parseFloat($('#passport').val());
            var gra  = parseFloat($('#graphics').val());
            var oth  = parseFloat($('#others').val());
            var exp  = parseFloat($('#expenses').val());

            var  total = ((reg + typ + pho + pas + gra + oth) - exp);
            $('#income').val(total);

        })

        $(document).on("change keyup",'#typing',function(){
            var reg  = parseFloat($('#online_reg').val());
            var typ  = parseFloat($('#typing').val());
            var pho  = parseFloat($('#photocopy').val());
            var pas  = parseFloat($('#passport').val());
            var gra  = parseFloat($('#graphics').val());
            var oth  = parseFloat($('#others').val());
            var exp  = parseFloat($('#expenses').val());

            var  total = ((reg + typ + pho + pas + gra + oth) - exp);
            $('#income').val(total);

        })
        $(document).on("change keyup",'#photocopy',function(){
            var reg  = parseFloat($('#online_reg').val());
            var typ  = parseFloat($('#typing').val());
            var pho  = parseFloat($('#photocopy').val());
            var pas  = parseFloat($('#passport').val());
            var gra  = parseFloat($('#graphics').val());
            var oth  = parseFloat($('#others').val());
            var exp  = parseFloat($('#expenses').val());

            var  total = ((reg + typ + pho + pas + gra + oth) - exp);
            $('#income').val(total);

        })
        $(document).on("change keyup",'#passport',function(){
            var reg  = parseFloat($('#online_reg').val());
            var typ  = parseFloat($('#typing').val());
            var pho  = parseFloat($('#photocopy').val());
            var pas  = parseFloat($('#passport').val());
            var gra  = parseFloat($('#graphics').val());
            var oth  = parseFloat($('#others').val());
            var exp  = parseFloat($('#expenses').val());

            var  total = ((reg + typ + pho + pas + gra + oth) - exp);
            $('#income').val(total);

        })
        $(document).on("change keyup",'#graphics',function(){
            var reg  = parseFloat($('#online_reg').val());
            var typ  = parseFloat($('#typing').val());
            var pho  = parseFloat($('#photocopy').val());
            var pas  = parseFloat($('#passport').val());
            var gra  = parseFloat($('#graphics').val());
            var oth  = parseFloat($('#others').val());
            var exp  = parseFloat($('#expenses').val());

            var  total = ((reg + typ + pho + pas + gra + oth) - exp);
            $('#income').val(total);

        })
        $(document).on("change keyup",'#others',function(){
            var reg  = parseFloat($('#online_reg').val());
            var typ  = parseFloat($('#typing').val());
            var pho  = parseFloat($('#photocopy').val());
            var pas  = parseFloat($('#passport').val());
            var gra  = parseFloat($('#graphics').val());
            var oth  = parseFloat($('#others').val());
            var exp  = parseFloat($('#expenses').val());

            var  total = ((reg + typ + pho + pas + gra + oth) - exp);
            $('#income').val(total);

        })
        $(document).on("change keyup",'#expenses',function(){
            var reg  = parseFloat($('#online_reg').val());
            var typ  = parseFloat($('#typing').val());
            var pho  = parseFloat($('#photocopy').val());
            var pas  = parseFloat($('#passport').val());
            var gra  = parseFloat($('#graphics').val());
            var oth  = parseFloat($('#others').val());
            var exp  = parseFloat($('#expenses').val());

            var  total = ((reg + typ + pho + pas + gra + oth) - exp);
            $('#income').val(total);

        })
    </script>
</div>
<!-- End DASHBOARD BODY section -->

      
@endsection






