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
                                        <H4>Card-Name : WAEC RESULT CHECKING CARD </H4>
                                    </div>
                                    <span class="text-success"><strong>Total-Bill: #{{ Session::get('card_amount') }}</strong></span><br>
                                    <small><strong>Note: A PIN & SERIAL NO will be generated for you after payment which you will used to check your waec Result</strong></small>
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
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['ref_id'=> Session::get('ref_id'),'year' => Session::get('year'),'type'=> 'WAEC','price'=>Session::get('card_amount')]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
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

    </div>
   

    <!-- End DASHBOARD BODY section -->
@endsection