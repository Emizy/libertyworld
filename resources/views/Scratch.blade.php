@extends('layouts.master')

@section('content')

    <!-- Nav bar End here... -->
    <!-- Start DASHBOARD BODY section -->
    <div class="container">


        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel">
                    <div class="row">
                        <div class="col-md-8 order-md-2 mb-4 col-md-offset-2">

                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between bg-important">
                                    <div class="text-success">
                                        <img src="{{ asset('/images/happy.png') }}" height="30%" width="30%" style="margin-left: 150px;">
                                    </div>
                                    <br>
                                    <hr>
                                    @if(Session::has('Waec_Success'))
                                        <h4 style="color: green;">WAEC CARD DETAILS</h4>
                                        <p style="font-size: 15px"><strong>CARD PIN : {{ Session::get('pin') }}</strong></p>
                                        <p style="font-size: 15px"><strong>SERIAL NO: {{ Session::get('ref_id') }}</strong></p>
                                        <p>Visit WEAC website now to check your RESULT. Click here to <a href="https://www.waecdirect.org/">Check Result</a></p>
                                    @elseif(Session::has('Neco_Success'))
                                    <h4 style="color: green;">NECO CARD DETAILS</h4>
                                        <p style="font-size: 15px"><strong>CARD PIN: {{ Session::get('pin') }}</strong></p>
                                        <p style="font-size: 15px"><strong>SERIAL NO: {{ Session::get('ref_id') }}</strong></p>
                                        <p>Visit NECO website now to check your RESULT. Click here to <a href="http://www.mynecoexams.com/results/Default.aspx">Check Result</a></p>
                                    @elseif(Session::has('WaecGce_Success'))
                                    <h4 style="color: green;">NECO GCE CARD DETAILS</h4>
                                        <p style="font-size: 15px"><strong>CARD PIN: {{ Session::get('pin') }}</strong></p>
                                        <p style="font-size: 15px"><strong>SERIAL NO: {{ Session::get('ref_id') }}</strong></p>
                                        <p>Visit NECO website now to check your RESULT. Click here to <a href="https://result.neco.gov.ng/">Check Result</a></p>
                                    @else
                                    <p style="font-size: 15px"><strong>You have not purchase any card.. <a href="/dashboard">Click Here to BUY</a> </strong></p>
                                    @endif
                                </li>
                            </ul>

                        </div>
                    </div>


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