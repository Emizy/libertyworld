@extends('layouts.master')

@section('content')

<!-- Start DASHBOARD BODY section -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">

                <div class="panel panel-default">
                    <div class="panel-heading"><p style="color: #eb6003;">
                        

                    </div>
                    <div class="panel-body">
                        @if(session('status') != null)
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                            @endif
                        <div class="mytable">
                           
                            @if(isset($transaction))
                                @if(count($transaction) > 0)

                                    <div class="company" style="color: #eb6003;">

                                        <h3><b>DATA TRANSACTION HISTORY</b></h3>
                                    </div>

                                    <table class="table table-striped">


                                        <thead style="background-color: #38010a; color: white;">
                                        <tr>
                                            <th>S/N</th>
                                            <th>DATA</th>
                                            <th>EMAIL</th>
                                            <th>TELEPHONE</th>
                                            <th>AMOUNT</th>
                                            <th>STATUS</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody style="color: black">
                                         @foreach($transaction as $transactions)
                                            <tr>
                                                <th>{{ $transactions -> id }}</th>
                                                <td>{{ $transactions -> data }} </td>
                                                <td>{{ $transactions -> email }}</td>
                                                <td>{{ $transactions -> telephone }}</td>
                                                <td>{{ $transactions -> amount }}</td>
                                                <td style="color: green;font-style: italic">{{ $transactions -> status }}</td>

                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                @else
                                    <div class="alert alert-warning">No Result Uploaded, Check Back Later</div>
                                @endif

                                @else
                                    <div class="alert alert-warning">No Result Uploaded, Check Back Later</div>
                                @endif
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- End DASHBOARD BODY section -->

 
@endsection

