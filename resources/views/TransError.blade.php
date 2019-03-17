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
                                        <img src="{{ asset('/images/sad.png') }}" height="30%" width="30%" style="margin-left: 150px;">
                                    </div>
                                    <br>
                                    <hr>
                                    <p style="font-size: 20px;color: darkred;"><strong>Oops!! Transaction not successfull, Kindly try
                                            Again</strong></p>
                                </li>
                            </ul>

                        </div>
                    </div>


                </div>
            </div>
         
        </div>
    </div>
   
    <!-- End DASHBOARD BODY section -->
@endsection