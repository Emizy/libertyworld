@extends('layouts.app')

@section('content')
<!-- Start DASHBOARD BODY section -->
                <div class="container">

                  <div class="col-md-4 col-md-offset-3">
          <div class="panel" >
                        <div class="panel-heading" style="background-color: #70389C; color: white">
                            <div class="panel-title">
                                 <h4>Wallet Balance</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="panel-content" style="text-align: center">

                                <div class="col-md-4" style="color: black;">
                                    <p>{{ Auth::user()->name}}'s</p>
                                    
                            <li class="fa fa-sign-out">
                                        <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </li>
                    </div>

                                
                                                  <h4><span>₦</span> <span class="walletBalanceSpan">0</span></h4>
                                                  <a class="btn btn--primary" href="#" style="">
                                                      <span class="btn__text adminBtn" data-target="wallet" style="font-size:16px">
                                                          Fund Wallet
                                                      </span>
                                                  </a>
                            </div>
                        </div>               
                    </div>  
        </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif

            @if(session('response'))
                <div class="alert alert-success">{{session('response')}}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #70389C; color: white">BUY CARDS</div>

                <div class="panel-body">

                    <form method='POST' id='payform' action='//voguepay.com/pay/' onsubmit='return true;'>
    <input type='hidden' name='v_merchant_id' value='5566-0072362' />
    <input type='hidden' name='merchant_ref' value=' https://voguepay.com/5566-0072362' />
    <input type='hidden' name='memo' value='Bulk order from McAckney Web Shop' />

    <input type='hidden' name='notify_url' value='//www.libertyworld.com.ng/buy_cards' />
    <input type='hidden' name='success_url' value='/www.libertyworld.com.ng/buy_cards' />
    <input type='hidden' name='fail_url' value='/www.libertyworld.com.ng/buy_cards' />

    <input type='hidden' name='developer_code' value='5bc96fc5cef91' />
    <input type='hidden' name='store_id' value='25' />

    <!-- ##Use notify url if you want a transaction response to be sent to the notify## -->
    <input type='hidden' name='notify_url' value='//www.libertyworld.com.ng/buy_cards' />

    <!-- ##Success and fail URL are not required if integration method is inline.##
    ##These are to be uses if you are using the form redirect method.## -->
    <input type='hidden' name='success_url' value='//www.libertyworld.com.ng/buy_cards' />
    <input type='hidden' name='fail_url' value='//www.libertyworld.com.ng/buy_cards' />

    <input type='hidden' name='total' value='13000' />


     <input type='hidden' name='name' value='Customer name'/>
    <input type='hidden' name='address' value='Customer Address'/>
    <input type='hidden' name='city' value='Customer City'/>
    <input type='hidden' name='state' value='Customer State'/>
    <input type='hidden' name='zipcode' value='Customer Zip/Post Code'/>
    <input type='hidden' name='email' value='Customer email'/>
    <input type='hidden' name='phone' value= 'Customer phone '/>

    <!-- ##notification triggers for inline payments only## -->
    <input type='hidden' name='closed' value='closedFunction'>
    <input type='hidden' name='success' value='successFunction'>
    <input type='hidden' name='failed' value='failedFunction'>

    <input type='image' src='//voguepay.com/images/buttons/buynow_blue.png' alt='Submit' />
</form>
                    <!-- <form class="form-horizontal" method="POST" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Customer Name</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="name" value="{{ Auth::user()->name}}" readonly="true" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">BUY CARDS</label>                          
                                <div class="col-md-6">
                                    
                                    <select  id="cards" class="form-control" onchange="run()" name="data">
                                        <option value="Select State">----- Select Cards -----</option> 

                                        <option  value="800">NECO Result Checker Cards (₦ 800.00)</option>
                            <option  id="800" value="800 ">WAEC Result Checker Cards (₦ 800.00)</option>
                            <option  id="900" value=" 900">NABTEB Result Checker Cards (₦ 900.00)</option>
                            <option  id="800" value=" 800 ">WAEC Result Verification Pins (₦ 800.00)</option>
                            <option  id="14500" value=" 14500 ">WAEC GCE Form (₦ 14500.00)</option>
                            <option  id="12500" value=" 12500 ">NECO Nov/Dec External Card (₦ 12500.00)</option>
                            <option  id="10800" value=" 10800 ">NABTEB Registration Cards (₦ 10800.00)</option>
                            <option  id="11000" value=" 11000 ">NABTEB A'Level Cards (₦ 11000.00)</option>
                            <option  id="2800" value=" 2800 ">NECO Common Entrance (₦ 2800.00)</option>
                            <option  id="14500" value=" 14500 ">NECO Result Checker Cards (₦ 14500.00)</option>
 
                                    </select>
                                     @if ($errors->has('data'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('data') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-4 control-label">Mobile NO</label>

                            <div class="col-md-6">
                                <input id="telephone" type="tel" class="form-control" name="telephone" required>

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Amount To Pay</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" readonly="true" required>

                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <script src="https://js.paystack.co/v1/inline.js"></script>
                <button type="button" onclick="payWithPaystack()"> Buy Now </button>
                                <script> 

                                    function payWithPaystack(){
                                      var name = document.getElementById('name').value;
                                 var userEmail = document.getElementById('email').value;
                                  var telephone = document.getElementById('telephone').value;
                                   var userAmount = document.getElementById('amount').value; 
                                          var handler = PaystackPop.setup({
      key: 'pk_test_9a83cfdad663d7a629299b321c6abeb340f2b140',
      email: userEmail,
      amount: userAmount * 100,
      ref: ''+ Math.floor((Math.random() * 1000000000) + 1),
      metadata: {
         custom_fields: [
            {
                display_name: name,
                variable_name: "mobile_number",
                value: telephone,

            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
  //Code to display Data Amount
   function run()
            {
                document.getElementById("amount").value=document.getElementById("cards").value;
                
            }
                                </script>
                                
                            </div>
                        </div>
                    </form> -->
                </div>

                <div class="grid_1_of_4 images_1_of_4">
          <div class="panel  quick-actions">
           <div class="panel-heading" style="background-color: #70389C; color: white;">
                            <div class="panel-title">
                                Quick Actions
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><a href="/dashboard">Buy Databundle</a></li>
                                <li><a href="/dashboard">Buy Airtime</a></li>
                                <li><a href="/dashboard">Send BulkSMS</a></li>
                                <li><a href="/dashboard">CableTV Subscription</a></li>
                                <li><a href="/dashboard">Deposit Money</a></li>
                                <li><a href="/dashboard">Transfer Money</a></li>   
                                <li><a href="/dashboard">Airtime To Data</a></li>                                                            
                                <li><a href="/dashboard">Print Recharge Card</a></li>                                
                                <!--<li><a href="CryptoBuySell.asp">Trade Bitcoin</a></li>-->                               
                            </ul>
                        </div>
                      </div>
          
        </div>
        <div class="grid_1_of_4 images_1_of_4">
          <div class="panel quick-actions" >
                        <div class="panel-heading" style="background-color: #70389C; color: white;">
                            <div class="panel-title">
                                 Our Internet/Mobile Data Plan 
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="panel-content">
                                <p>
                                    Our Internet/Mobile data plan works with all 
devices e.g Andriod, Iphone, Blackberry(OS 10), computers, modems e.t.c.
 Data rollover if you re-subscribe before expiry of current plan.
                                </p>
                                <p>
                                    To check your data balance<br>
                                    MTN &gt;&gt; *461*6#<br>
                                    Etisalat &gt;&gt; *228#<br>
                                    GLO &gt;&gt; *127*0#<br>
                                    AirTel &gt;&gt; *140#
                                </p>
                            </div>
                        </div>               
                    </div>  
        </div>

        <div class="grid_1_of_4 images_1_of_4">
                 <div class="panel quick-actions">
                        <div class="panel-heading" style="background-color: #70389C; color: white;">
                            <div class="panel-title">
                                 Our Internet/Mobile Data Plan 
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="panel-content">
                                <p>
                                    LibertyWorld Offers Wholesale/Company Price On
 Various Products and Services To All Its Members In Nigeria. We offer 
Instant Activation in All Our Offices Nationwide.
                                </p>
                                
                                <p>
                                Call: 08136088266
                                </p>
                            </div>
                        </div>               
                    </div>  
        </div>
        <div class="grid_1_of_4 images_1_of_4">
         <div class="panel quick-actions" >
           <div class="panel-heading" style="background-color: #70389C; color: white;">
                            <div class="panel-title">
                                Quick Actions
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>* <a href="student_fees">Web Development</a></li>
                                <li>* <a href="student_fees">Graphic Design</a></li>
                                <li>* <a href="student_fees">Computer Training</a></li>
                                <li>* <a href="student_fees">Android Developer</a></li> 
                                <li>* <a href="student_fees">Buy and Sell</a></li>                                                    
                                <li>* <a href="student_fees">Face of the week</a></li>                                
                                <!--<li><a href="CryptoBuySell.asp">Trade Bitcoin</a></li>-->                               
                            </ul>
                        </div>
                      </div>
        </div>                
        
                <div class="col-sm-4">
                                            
                                                <!-- <i class="icon icon-Duplicate-Window icon--sm color--primary"></i> -->
                                                <div class="feature__body">
                                                  
                                                </div>
                                              </div>
            </div>
        </div>
    </div>
</div>

<!-- End DASHBOARD BODY section -->
@endsection