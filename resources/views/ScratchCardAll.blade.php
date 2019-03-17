@extends('layouts.master')

@section('content')


    <!-- Start DASHBOARD BODY section -->
    <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <div class="mytable">
                            @if(session('status') != null)
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                            @endif
                            @if(isset($transaction))
                                @if(count($transaction) > 0)

                                    <div class="company" style="color: #eb6003;">

                                        <h3><b>SCRATCH CARDS TRANSACTION HISTORY</b></h3>
                                    </div>

                                    <table class="table table-striped">


                                        <thead style="background-color: #38010a; color: white;">
                                        <tr>
                                            <th>Date</th>
                                            <th>Card Type</th>
                                            <th>Pin</th>
                                            <th>Reference Id</th>
                                            <th>Amount</th>
                                            <th>STATUS</th>
                                            <th></th>
                                        </tr>
                                        </thead>


                                        <tbody style="color: black">
                                        @foreach($transaction as $transactions)
                                            <tr>
                                                <th>{{ $transactions -> created_at }}</th>
                                                <td>{{ $transactions-> scratch_name }} </td>
                                                <td>{{ $transactions -> card_pin }}</td>
                                                <td>{{ $transactions -> ref_id }}</td>
                                                <td>{{ $transactions -> price }}</td>
                                                <td style="color: green;font-style: italic">{{ $transactions -> Usage_status }}</td>
                                                <td>
                                                    <button class="btn btn-sm-primary" style="color: white;background-color: red">Trash</button>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                @else
                                    <p style="font-size: 15px"><strong>No Transaction Records found <a
                                                    href="\dashboard">Click Here to BUY</a> </strong></p>
                                @endif
                            @else
                                <p style="font-size: 15px"><strong>No Transaction Records found <a
                                                href="\dashboard">Click Here to BUY</a> </strong></p>
                            @endif
                        </div>
                    </div>

                </div>
            

    <!-- End DASHBOARD BODY section -->

@endsection