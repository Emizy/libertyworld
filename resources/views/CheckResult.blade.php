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
                        <div class="mytable">
                           
                            @if(isset($checkresults))
                                @if(count($checkresults) > 0)

                                    <div class="company" style="color: #eb6003;">

                                        <h3><b>GOD'S LIBERTY COMPUTECH STUDENT'S RESULT</b></h3>
                                    </div>

                                    <table class="table table-striped">


                                        <thead style="background-color: #38010a; color: white;">
                                        <tr>
                                            <th>S/N</th>
                                            <th>PHOTO</th>
                                            <th>STUDENT NAME</th>
                                            <th>SCORES</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody style="color: black">
                                         @foreach($checkresults as $checkresults)
                                            <tr>
                                            	<td>{{ $checkresults -> id }} </td>
                                                <th><img src="{{ $checkresults->studphoto }}" class="avatar" alt="" style="width:50px; "></th>
                                                <td>{{ $checkresults -> studname }}</td>
                                                <td>{{ $checkresults -> stud_score }}%</td>

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