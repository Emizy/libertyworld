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

    <link href="{{asset('css2/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('css2/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('css2/style.css')}}" rel="stylesheet">
    <link href="{{asset('css2/style-responsive.css')}}" rel="stylesheet" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Liberty') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/regpage.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="jquery-2.1.1.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    
    <!--
    <script type="text/javascript">
        function imagepreview(input)
        {
            if(input.files && input.files[0])
            {
                var filerd = new FileReader();
                filerd.onload = function (e){
                    $('#imgprev').attr('src', e.target.result);
                };
                filerd.readAsDataURL(input.files[0]);
            }
        }
        //i mention $ symbol function so its not identified by onchange...

    </script>
-->
</head>

<body>


<!-- @if(!isset($_GET['code']) || empty($_GET['code']))
  <script> 
 window.location.href='/access';
</script>
@endif -->
        
    <!-- container section start -->
    <section id="container" class="">
        <!--header start-->

        <header class="header" style="background-color: #400202">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Great <span class="lite">Liberty</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>
                </ul>
                <!--  search form end -->
            </div>

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">

                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">100% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: white; position: relative; padding-left: 50px;">

                                    @if(!empty($profile))
                                        <img src="{{ $profile->profile_pic }}" class="avatar" alt="" style="width:32px; height: 32px; position:absolute; top: 10px; left: 10px; border-radius: 50%;">
                                    @else
                                        <img src="{{ url('images/avatar.png') }}" class="avatar" alt="" style="width:32px; height: 32px; position:absolute; top: 10px; left: 10px; border-radius: 50%;">
                                    @endif

                                   
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse " style="background-color: #400202;">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="">
                        <a class="" href="/student_form">
                            <i class="icon_house_alt"></i>
                            <span>Student's Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="#" class="">
                            <i class="icon_document_alt"></i>
                            <span>PLATFORM</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="/home">PLATFORM</a></li>
                            <li><a class="" href="SubmitForm">Print Form</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="" href="/CheckResult">
                            <i class="icon_desktop"></i>
                            <span>CHECK RESULT</span>

                        </a>

                    </li>

                    <li>
                        <a class="" href="/QuizApp">
                            <i class="icon_piechart"></i>
                            <span>QUIZ APP</span>

                        </a>

                    </li>

                    <li class="sub-menu">
                        <a href="/dashboard" class="">
                            <i class="icon_desktop"></i>
                            <span>BUY DATA</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        
                    </li>
                    
                    

                    <li class="sub-menu">
                        <a href="SubmitForm" class="">
                            <i class="icon_table"></i>
                            <span>PRINT FORM</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        
                    </li>

                    <li class="sub-menu ">
                        <a href="#" class="">
                            <i class="icon_documents_alt"></i>
                            <span>Pages</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="#">PAYMENT</a></li>
                            <li><a class="" href="#"><span>PRINT RECEIPT</span></a></li>
                            
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                                </a>
                        
                            
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                    </li>   

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header" style="color:white;"><i class="fa fa fa-bars"></i>STUDENT DASHBOARD</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="/student_form">Home</a></li>
                            <li><i class="fa fa-bars"></i>Pages</li>
                            <li><i class="fa fa-square-o"></i>Pages</li>
                        </ol>
                    </div>
                </div>
                <!-- page start-->
                <div class="panel panel-default">
                    <div class="panel-heading"style="background-color: #400202; color:darkorange; text-align: center; "><h3><b>STUDENT APPLICATION FORM</b></h3></div>



                    <div class="panel-body">
                        W e l c o m e!
                        <div class="panel-heading" style="text-align: center; color: red";>Please Provide a valid required information and complete the Form below</div>
                        <div class="panel-body">
                           
                            <form method="post" action="{{url('StudData')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                             
                                    <div class="row">
                            <div class="col-md-4" style="color: black;">
                            @if(!empty($studform))
                            <img src="{{ $user->passport }}" class="avatar" alt="" style="width:150px; height: 150px; float:left; border-radius: 50%;  margin-right: 25px;">
                            @else
                                <img src="{{ url('images/avatar.png') }}" class="avatar" alt="">
                            @endif

                            </div>
                             <div class="form-group{{ $errors->has('passport') ? ' has-error' : '' }}">
                                <label for="passport" class="col-md-4 control-label">Upload Passport</label>

                                <div class="col-md-6">
                                    <input id="passport" type="file" class="form-control" name="passport" required>

                                    @if ($errors->has('passport'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('passport') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                </div>
                                    </div>
                               <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                                <div class="form-group">
                                    <label for="fullname">Full Name:</label>
                                    <input type="text" value="{{ Auth::user()->name}}" name="fullname" placeholder="Full Name" class="form-control">
                                     @if ($errors->has('fullname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <div class="form-group">
                                    <label for="address">Home Address:</label>
                                    <input type="text" value="" name="address" placeholder="Home Address" class="form-control">
                                 @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                </div>
                                <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <label for="telephone">Telephone:</label>
                                    <input type="tel" value="" name="telephone" placeholder="+234 813 6088 266" class="form-control">
                                    @if ($errors->has('telephone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <label for="email">E-mail Address:</label>
                                    <input type="email" value="{{ Auth::user()->email}}" name="email" placeholder="Enter Email" class="form-control">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                </div>
                                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <div class="form-group">
                                    <label for="gender">Gender:</label><br>
                                    <input type="radio" name="gender" value="MALE" checked> Male<br>
                                    <input type="radio" name="gender" value="FEMALE"> Female<br>
                                    <input type="radio" name="gender" value="OTHER"> Other<br>
                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                </div>
                                <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <label for="age">Enter a date before 2010-01-01:</label>
                                    <input type="date" value="" name="age" max="2010-12-31" class="form-control" >
                                    @if ($errors->has('age'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                </div>
                                <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <label for="program">Programme Apply for:</label>
                                    <select id="program" value="" name="program" class="form-control" >
                                        <option value="PROGRAM">-----Select your program-----</option>
                                        <option value="CBT-Program">CBT Program</option>
                                        <option value="3-Months">3-Months Computer Diploma</option>
                                        <option value="6-Months Program">6-Months Computer Diploma</option>
                                        <option value="1-Year Computer Diploma">1-Year Computer Diploma</option>
                                        <option value="IT Student">IT Student</option>
                                        <option value="Programmer/Developer">Programmer/Developer</option>
                                        <option value="Graphic Designer">Graphic Designer</option>
                                    </select>
                                     @if ($errors->has('program'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('program') }}</strong>
                                    </span>
                                    @endif
                                </div> 
                                </div> 

                                <div class="form-group{{ $errors->has('payment') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <label for="payment">Payment Type:</label>
                                    <select id="payment" value="" name="payment" class="form-control" >
                                        <option value="payment">-----Select Payment Type-----</option>
                                        <option value="Full-Payment">Full Payment</option>
                                        <option value="Part-Payment">Part Payment</option>
                                    </select>
                                     @if ($errors->has('payment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('payment') }}</strong>
                                    </span>
                                    @endif
                                </div> 
                                </div>  

                                <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <label for="amount">Amount PAID:</label>
                                    <input type="text" value="" name="amount" placeholder="Enter Amount Paid" class="form-control">
                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                </div> 

                                <div class="form-group{{ $errors->has('av_balance') ? ' has-error' : '' }}">
                                <div class="col-md-6">
                                    <label for="av_balance">Amount to Balance:</label>
                                    <input type="text" value="" name="av_balance" placeholder="Enter Remaining Balance" class="form-control">
                                    @if ($errors->has('av_balance'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('av_balance') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                </div> 

                                <div class="form-group{{ $errors->has('origin') ? ' has-error' : '' }}">                 
                                <div class="col-md-6">
                                    <label for="origin">State of Origin</label>
                                    <select id="origin" value="" class="form-control" name="origin" >
                                        <option value="Select State">--- Select your State ---</option>                      
                                        <option value="Abuja FCT">Abuja FCT</option>
                                          <option value="Abia">Abia</option>
                                          <option value="Adamawa">Adamawa</option>
                                          <option value="Akwa Ibom">Akwa Ibom</option>
                                          <option value="Anambra">Anambra</option>
                                          <option value="Bauchi">Bauchi</option>
                                          <option value="Bayelsa">Bayelsa</option>
                                          <option value="Benue">Benue</option>
                                          <option value="Borno">Borno</option>
                                          <option value="Cross River">Cross River</option>
                                          <option value="Delta">Delta</option>
                                          <option value="Ebonyi">Ebonyi</option>
                                          <option value="Edo">Edo</option>
                                          <option value="Ekiti">Ekiti</option>
                                          <option value="Enugu">Enugu</option>
                                          <option value="Gombe">Gombe</option>
                                          <option value="Imo">Imo</option>
                                          <option value="Jigawa">Jigawa</option>
                                          <option value="Kaduna">Kaduna</option>
                                          <option value="Kano">Kano</option>
                                          <option value="Katsina">Katsina</option>
                                          <option value="Kebbi">Kebbi</option>
                                          <option value="Kogi">Kogi</option>
                                          <option value="Kwara">Kwara</option>
                                          <option value="Lagos">Lagos</option>
                                          <option value="Nassarawa">Nassarawa</option>
                                          <option value="Niger">Niger</option>
                                          <option value="Ogun">Ogun</option>
                                          <option value="Ondo">Ondo</option>
                                          <option value="Osun">Osun</option>
                                          <option value="Oyo">Oyo</option>
                                          <option value="Plateau">Plateau</option>
                                          <option value="Rivers">Rivers</option>
                                          <option value="Sokoto">Sokoto</option>
                                          <option value="Taraba">Taraba</option>
                                          <option value="Yobe">Yobe</option>
                                          <option value="Zamfara">Zamfara</option>
                                 <option value="Outside Nigeria">Outside Nigeria</option>
                                    </select>
                                     @if ($errors->has('origin'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('origin') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('lga') ? ' has-error' : '' }}"> 
                                <div class="col-md-6">
                                            <label for="lga">LGA:</label>
                                            <input type="text" value="" name="lga" placeholder="Local Govt. Area" class="form-control">
                                            @if ($errors->has('lga'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lga') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <p>   
                            <div class="form-group{{ $errors->has('town') ? ' has-error' : '' }}"> 
                                <div class="col-md-6">
                                    <label for="town">Home Town:</label>
                                    <input type="text" value="" name="town" placeholder="Home Twon" class="form-control">
                                     @if ($errors->has('town'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('town') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div></p> <br>

       
                                    <!--
                                <div class="form-group" style="padding-bottom: 5px;">
                                    <label class="control-label" for="passport">Upload Passport</label>
                                    <input  type="file" name="passport" id="idupload" onchange="imagepreview(this);" /><br />
                                    <img value="browse" id="imgprev" src="{{url('images/contact.png')}}" style="width:150px; height: 150px; float:left; border-radius: 50%; margin-right: 25px;">
                                </div>
                                -->

                               
                                <div class="col-md-12 ">
                                <div class="panel-group" >
                                    <div class="panel panel-default">
                                        <div class="panel-heading"style="background-color:#340206; color: #f5f5f5;">Guildiance's Information</div>
                                    <div class="form-group{{ $errors->has('pfullname') ? ' has-error' : '' }}"> 
                                        <div class="col-md-12">
                                            <label for="pfullname">Full Name:</label>
                                            <input type="text" value="" name="pfullname" placeholder="Fullname" class="form-control">
                                             @if ($errors->has('pfullname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('pfullname') }}</strong>
                                    </span>
                                    @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('ptelephone') ? ' has-error' : '' }}"> 
                                        <div class="col-md-6">
                                            <label for="ptelephone">Telephone:</label>
                                            <input type="text" value="" name="ptelephone" placeholder="Telephone" class="form-control">
                                             @if ($errors->has('ptelephone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ptelephone') }}</strong>
                                    </span>
                                    @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('relationship') ? ' has-error' : '' }}"> 
                                        <div class="col-md-6">
                                            <label for="relationship">Relationship:</label>
                                            <input type="text" value="" name="relationship" placeholder="relationship" class="form-control">
                                             @if ($errors->has('relationship'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('relationship') }}</strong>
                                    </span>
                                    @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('paddress') ? ' has-error' : '' }}"> 
                                        <div class="col-md-12" style="padding-bottom: 5px;">
                                            <label for="paddress">Home Address:</label>
                                            <input type="text" value="" name="paddress" placeholder="Address" class="form-control">
                                            @if ($errors->has('paddress'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('paddress') }}</strong>
                                    </span>
                                    @endif
                                        </div>
                                    </div>


                                    </div>
                                </div>

                                <button style="background-color: #340206; color: floralwhite; text-weight:bold;" type="submit" class="btn btn-primary">Submit</button>
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            </form>
                            
                        </div>
                    </div>
                </div>

            </section>
      
        <!--main content end-->
        <div class="text-right">
            <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <div class="copy_right" style="float: center;">
                <p>God's Liberty Computech © All rights Reserved | Design by  <a href="#">::GREAT LIBERTY</a> </p>
           </div>

                
            </div>
        </div>
    </section>
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

