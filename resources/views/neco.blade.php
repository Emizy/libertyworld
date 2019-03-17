@extends('layouts.master')

@section('content')


    <!-- Nav bar End here... -->
    <!-- Start DASHBOARD BODY section -->
    <div class="container">



        <div class="row">
            <div class="col-md-8 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #70389C; color: white;text-align: center;">PAYMENT - CHECKOUT <i class="fa fa-exchange"></i> </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-8 order-md-2 mb-4 col-md-offset-2">

                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between bg-important">
                                    <div class="text-success">
                                        <h4 class="my-0"><strong><u>Scratch Card Billing Details</u></strong></h4>
                                        <H4>Card-Name : NECO 18/19 SCRATCH CARD </H4>
                                    </div>
                                    <span class="text-success"><strong>Total-Bill: #{{ Session::get('card_amount') }}</strong></span><br>
                                    <small><strong>Note: A code will be generated for you after payment which you will used to get your waec pin</strong></small>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        <div class="row" style="margin-bottom:40px;">
                            <div class="col-md-8 col-md-offset-2">

                                <input type="hidden" name="email" value="{{ Auth::user()->email}}"> {{-- required --}}
                                <input type="hidden" name="orderID" value="345">
                                <input type="hidden" name="amount" id="amount" value="{{ Session::get('total') }}"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="3">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['ref_id'=> Session::get('ref_id'),'year' => Session::get('year'),'type'=> 'NECO','price'=>Session::get('card_amount')]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


                                <p>
                                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                    </button>
                                </p>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
            </form>
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
                        Mobile Data Plan
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
                        Services
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