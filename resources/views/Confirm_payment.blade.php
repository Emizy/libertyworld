@extends('layouts.app')

@section('content')

<!-- Start DASHBOARD BODY section -->
<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-3">
          <div class="panel" >
                        <div class="panel-heading" style="background-color: #70389C; color: white">
                            <div class="panel-title">
                                 Wallet Balance
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

        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #70389C; color: white">CONFIRM YOUR PAYMENT</div>
                <div class="panel-heading"><b>Check your information correctly and proceed to make payment</b></div>

                <div class="panel-body">
                     <form class="form-horizontal" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Candidate Name:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name}}" required readonly="true">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email}}" required readonly="true" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-4 control-label"> Telephone:</label>

                            <div class="col-md-6">
                                <input id="telephone" type="tel" class="form-control" name="telephone">

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
                            <p style="text-align: center; color: red;">Confirm Program apply for and proceed to make payment</p>
                            <label for="program" class="col-md-4 control-label"> Programme Apply for:</label>

                            <div class="col-md-6">
                                    <select id="program"  onchange="run()" name="program" class="form-control" >
                                        <option value="PROGRAM">-----Select your program-----</option>
                                        <option value="3000">CBT Program</option>
                                        <option value="10000">3-Months Computer Diploma</option>
                                        <option value="16000">6-Months Computer Diploma</option>
                                        <option value="30000">1-Year Computer Diploma</option>
                                    </select>

                                @if ($errors->has('program'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('program') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label"> Amount PAID:</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" readonly="true">

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
                document.getElementById("amount").value=document.getElementById("program").value;
                
            }
                                </script>
                                
                            </div>
                        </div>    
                    </form>

                </div>
            </div>
        </div>
    </div>
</div> 
<!-- End DASHBOARD BODY section -->

@endsection