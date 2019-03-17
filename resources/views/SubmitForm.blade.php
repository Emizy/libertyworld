<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="God's Liberty Computech">
    <meta name="author" content="Egbodofo Adebayo Liberty">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/regpage.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="images/libertylogo.png"  />
    <title>Liberty | Student Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="csc/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Liberty') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/regpage.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="jquery-2.1.1.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    
    

    <style type="text/css">
        .companys {
            text-align: center;
            background-image: url("images/submithead.jpg");
            background-size: cover;
            padding: 0px;
            border: 10px;
            height: 210px;
            margin: 1px;

        }
        .information{
           
            padding-top: 10px;
            padding-bottom: 10px;
            width: 100%;
        }
        

    </style>

</head>

<body>

<!-- @if(!isset($_GET['code']) || empty($_GET['code']))
  <script> 
 window.location.href='/access';
</script>
@endif
   
 -->
<div class="row">
    <div class="col-md-6 col-md-offset-3" style=" padding-left: 0px; padding-right: 0px; box-shadow: #0f0f0f">
        <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #400202; color: white; text-align: center; padding-top: 5px; "><h2><b>GOD'S LIBERTY COMPUTECH </b></h2>
                    <p><h4><b>Address: 4, Obolo Street, Okitipupa, Ondo State. Nig.</b></h4></p>
                </div>


                <div class="panel-body">

                    <div class="studform">


                        <div class="information">
                            <div class="panel-group" >
                                <div class="panel panel-default">
                                    <div class="page" style="padding-left: 5px;">
                                        <div class="form-group" style="padding-bottom: 5px;">

                                    <div class="comp_head" style="text-align: center;">
                                    
                              
                                    </div>

                                  @if(count($user) > 0) 
                                <div class="images_photo" style="padding-left: 20px;">
                                    <div class="row">
                                        <label><h3><b><u>STUDENT BIO-DATA FORM</u></b></h3></label>
                                            <img src="{{ $user->passport }}" class="avatar" alt="" style="width:150px; height: 150px; float:left; border-radius: 50%;  margin-right: 25px;">
                                          
                                        
                                    </div>
                                </div>
                                <fieldset>
                                    <legend>PERSONAL INFORMATION</legend>

                                            <label><h3><b>Full Name:</b> {{$user->fullname}}</h3></label>
                                            <p><label><b>Address:</b> {{$user->address}}</label></p>
                                            <p><label><b>Telephone:</b> {{$user->telephone}}<br></label></p>
                                            <p><label><b>E-mail Address:</b> {{$user->email}}<br></label></p>
                                            <p><label><b>Gender:</b> {{$user->gender}}<br></label></p>
                                            <p><label><b>Date-of-Birth:</b> {{$user->age}}<br></label></p>
                                            <p><label><b>Program Apply For:</b> {{$user->program}}<br></label></p>
                                            <p><label><b>Payment Type:</b> {{$user->payment}}<br></label></p>
                                            <p><label><b>Amount PAID:</b> {{$user->amount}}<br></label></p>
                                            <p><label><b>Student AccessCode/Password:</b> {{$user->access_code}}<br></label></p>
                                            <p><label><b>State of Origin:</b> {{$user->origin}}<br></label></p>
                                            <p><label><b>Local Govt. Area:</b> {{$user->lga}}<br></label></p>
                                            <p><label><b>Home Town:</b> {{$user->town}}<br></label></p>

                                    </fieldset>

                                    </div>
                                </div>
                            </div>

                            <div class="panel-group" >
                                <div class="panel panel-default">
                                   
                                    <div class="page" style="padding-left: 5px;">
                                        <fieldset>
                                            <legend>GUILDANCE'S INFORMATION</legend>
                                             <p><label><b>Full Name:</b> {{$user->pfullname}}<br></label></p>
                                        <p><label><b>Home Address:</b> {{$user->paddress}}<br></label></p>
                                        <p><label><b>Telephone:</b> {{$user->ptelephone}}<br></label></p>
                                        <p><label><b>Relationship:</b> {{$user->relationship}}<br></label></p>
                                        </fieldset>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-success">
                                <strong>Success!</strong> You have Successfully register
                            </div>
                             
 <button type="submit" class="btn btn-primary"><a href="home" style=" color: white;">BACK</a></button>
                        
                        <button type="submit" onClick="window.print()" class="btn btn-primary " style="float: right">Print</button>
                        </div>

                            @else
                                <p>No Student Record Available</p>
                            @endif

                    </div>
            </div>
            <div class="footers" >
                <p class="link"  style="text-align: center; color: red;"><span> © All rights Reserved | Designed by &nbsp; <a href="#"> Great Liberty</a>  </span></p>
            </div>
    </div>
     
</div>

<!-- container section end -->
<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/lte-ie7.js"></script>
<![endif]-->


</body>
</html>
