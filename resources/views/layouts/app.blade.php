
<!DOCTYPE HTML>
<head>
<title>LIBERTY PLATFORM</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="God's Liberty Computech">
<meta name="author" content="Egbodofo Adebayo Liberty">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="shortcut icon" href="images/libertylogo.png"  />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/nav-hover.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/app.css" rel="stylesheet" type="text/css" media="all" />
<!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />

<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
        
        <script src="js/jquery.min.js"></script>
  <script src="css/bootstrap.min"></script>

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });

  //Code to display Data Amount
  function run()
            {
              var plan = document.getElementById("data").value;
              if(plan == 'MTN 1GB'){
                document.getElementById("amount").value =  750;               
              }
              else if (plan == 'MTN 2GB') {
                  document.getElementById("amount").value =  1400;
              }
              else if (plan == 'MTN 5GB') {
                  document.getElementById("amount").value =  3000;
              }
              else if (plan == 'AirTel 1.5GB') {
                  document.getElementById("amount").value =  1000;
              }
              else if (plan == 'AirTel 3.5GB') {
                  document.getElementById("amount").value =  3000;
              }
              

            }
</script>
</head>
<body>
  <div class="wrap">
    <div class="header">
        <div class="header_top">
            <div class="header">
        <div class="wrap">
        <!-- Start-logo-->
        <div class="logo">
          <a href="#"><img src="images/platform_logos.png" title="logo" /></a>
        </div>
        
        <!-- End-Logo-->
        <!-- Start-Header-nav-->
        
        <div class="clear"> </div>
        
        <!-- End-Header-nav-->
      </div>
      </div>

              <div class="header_top_right">
                <div class="search_box">
                    <form>
                        <input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
                    </form>
                </div>
                <div class="shopping_cart">
                    <div class="cart">
                        <a href="#" title="View my shopping cart" rel="nofollow">
                            <strong class="opencart"> </strong>
                                <span class="cart_title">Cart</span>
                                    
                            </a>
                        </div>
                  </div>
        <div class="languages" title="language">
            <div id="language" class="wrapper-dropdown" tabindex="1">EN
                        <strong class="opencart"> </strong>
                        <ul class="dropdown languges">                  
                             <li>
                                <a href="#" title="Français">
                                    <span><img src="images/gb.png" alt="en" width="26" height="26"></span><span class="lang">English</span>
                                </a>
                             </li>
                                <li>
                                    <a href="#" title="Français">
                                        <span><img src="images/au.png" alt="fr" width="26" height="26"></span><span class="lang">Français</span>
                                    </a>
                                </li>
                        <li>
                            <a href="#" title="Español">
                                <span><img src="images/bm.png" alt="es" width="26" height="26"></span><span class="lang">Español</span>
                            </a>
                        </li>
                                <li>
                                    <a href="#" title="Deutsch">
                                        <span><img src="images/ck.png" alt="de" width="26" height="26"></span><span class="lang">Deutsch</span>
                                    </a>
                                </li>
                        <li>
                            <a href="$" title="Russian">
                                <span><img src="images/cu.png" alt="ru" width="26" height="26"></span><span class="lang">Russian</span>
                            </a>
                        </li>                   
                   </ul>
             </div>
             <script type="text/javascript">
            function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    }); 
                }
            }

            $(function() {

                var dd = new DropDown( $('#language') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown').removeClass('active');
                });

            });

        </script>
         </div>
            <div class="currency" title="currency">
                    <div id="currency" class="wrapper-dropdown" tabindex="1">$
                        <strong class="opencart"> </strong>
                        <ul class="dropdown">
                            <li><a href="#"><span>$</span>Dollar</a></li>
                            <li><a href="#"><span>€</span>Euro</a></li>
                        </ul>
                    </div>
                     <script type="text/javascript">
            function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    }); 
                }
            }

            $(function() {

                var dd = new DropDown( $('#currency') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown').removeClass('active');
                });

            });

        </script>
   </div>
           
     </div>
     <div class="clear"></div>
 </div>

<!-- Nav Bar start here... -->
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
data-target="#example-navbar-collapse">
<span class="sr-only">Great Liberty</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>

</button>

<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="nav navbar-nav">

    <div class="menu">
      <ul id="dc_mega-menu-orange" class="dc_mm-orange">

      <li><a href="/home">PlatForm</a></li>
      <li><a href="/dashboard">Dashboard</a></li>
      <li><a href="/profile">Profile</a></li>       
      <li><a href="/post">Add Post</a></li>
      <li><a href="/QuizApp">CBT Quiz</a></li>
      <li><a href="/product">Product</a></li>
      <li><a href="/about">About</a></li>
      
    @if(Auth::id() == 1)
      <li><a href="/category">Category</a></li>
      <li><a href="{{ url('/access') }}">Student</a></li>
      <li><a href="{{ url('/access') }}">Stud_List</a></li>
      <li><a href="{{ url('/access') }}">Account</a></li>
      <li><a href="{{ url('/access') }}">Receipt</a></li>
      <li><a href="{{ url('/GenerateAccess') }}">Add Access</a></li>
    @endif  
  <div class="clear"></div>
</ul>
</div>
</ul>
</div>
</nav>

<!-- Nav bar End here... -->
        @yield('content')

 </div>
 </div>
</div>
   <div class="footer">
      <div class="wrapper"> 
         <div class="section group">
                <div class="col_1_of_4 span_1_of_4">
                        <h4>Information</h4>
                        <ul>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/contact">Customer Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="/dashboard">Orders and Returns</a></li>
                        <li><a href="/contact"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Our Services</h4>
                        <ul>
                        <li><a href="/dashboard">BUY DATA</a></li>
                        <li><a href="/buy_cards">WAEC|NECO CARDS</a></li>
                        <li><a href="buy_cards">CableTV Subscription</a></li>
                        <li><a href="/access"><span>Graphic Design</span></a></li>
                        <li><a href="/access"><span>Web Developer</span></a></li>
                        </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>My account</h4>
                        <ul>
                            <li><a href="home">Sign In</a></li>
                            <li><a href="/home">View Blog</a></li>
                            <li><a href="/home">Update</a></li>
                            <li><a href="/home">Buy & Sell</a></li>
                            <li><a href="/home">Download Doc</a></li>
                        </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Contact</h4>
                        <ul>
                            <li><span>08136088266</span></li>
                            <li><span>09057246979</span></li>
                        </ul>
                        <div class="social-icons">
                            <h4>Follow Us</h4>
                              <ul>
                                  <li class="facebook"><a href="#" target="_blank"> </a></li>
                                  <li class="twitter"><a href="#" target="_blank"> </a></li>
                                  <li class="googleplus"><a href="#" target="_blank"> </a></li>
                                  <li class="contact"><a href="#" target="_blank"> </a></li>
                                  <div class="clear"></div>
                             </ul>
                        </div>
                </div>
            </div>
            <div class="copy_right">
                <p>God's Liberty Computech © All rights Reserved | Design by  <a href="#">::GREAT LIBERTY</a> </p>
           </div>
     </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
                              <script defer src="js/jquery.flexslider.js"></script>
                              <script type="text/javascript">
                                $(function(){
                                  SyntaxHighlighter.all();
                                });
                                $(window).load(function(){
                                  $('.flexslider').flexslider({
                                    animation: "slide",
                                    start: function(slider){
                                      $('body').removeClass('loading');
                                    }
                                  });
                                });
                              </script>

  <script src={{asset('js/jquery-3.1.1.min.js')}}> 
  </script>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
