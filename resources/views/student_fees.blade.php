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
                <div class="panel-heading" style="background-color: #70389C; color: white">STUDENT PAYMENT INVOICE</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('receipt') }}">
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

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Home Address:</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
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

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label"> Gender:</label>

                            <div class="col-md-6">
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

                         <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
                            <label for="program" class="col-md-4 control-label"> Programme Apply for:</label>

                            <div class="col-md-6">
                                    <select id="program" onchange="run()" name="program" class="form-control" >
                                        <option value="PROGRAM">-----Select your program-----</option>
                                        <option value="CBT-Program (#3000)">CBT Program</option>
                                        <option value="3-Months (#10,000)">3-Months Computer Diploma</option>
                                        <option value="6-Months Program (#16,000)">6-Months Computer Diploma</option>
                                        <option value="1-Year Computer Diploma (#30,000)">1-Year Computer Diploma</option>
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
                                <button style="background-color: #70389C; color: white" type="submit" class="btn ">
                                    PAY NOW
                                </button>
 
                            </div>
                        </div>
                    </form>

                    <script type="text/javascript">
                        function run()
            {
                document.getElementById("amount").value=document.getElementById("program").value;
                
            }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- End DASHBOARD BODY section -->
@extends('layouts.app')

@section('content')