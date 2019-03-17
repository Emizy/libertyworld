@extends('layouts.master')

@section('content')



<!-- Start DASHBOARD BODY section -->
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome ADMIN:: {{ Auth::user()->name}}'s</div>
                    <div class="panel-heading"style="background-color: black; color: #eb6003;">COMPANY'S RECORD</div>
                    <div class="panel-body">
                
                    <p><li class="sub-menu" style="float: left;">
                    <a href="{{url('/Createaccount')}}" class="">
                        <i class="icon_table"></i>
                        <span>Insert Account</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                </li>

                    <li class="sub-menu">
                    <a href="/post/1" class="">
                        <i class="fa fa-eye"></i>
                        <span>Read</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                </li>

                    </p>
                </div>
                <div class="panel-body">
                    <div class="mytable">
    @if(session('status') != null)
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    @if(count($postaccounts) > 0)

        <div class="company" style="color: #eb6003;">

            <h3><b>COMPANY'S RECORD</b></h3>
        </div>

        <table class="table table-striped">


            <thead style="background-color: #38010a; color: white;">
            <tr>
                <th>DATE</th>
                <th>ONLINE REG</th>
                <th>TYPING</th>
                <th>PHOTOCOPY</th>
                <th>PASSPORT</th>
                <th>GRAPHIC</th>
                <th>OTHERS</th>
                <th>EXPENSES</th>
                <th>INCOME</th>
                 <th>Action</th>
            </tr>
            </thead>



            <tbody style="color: black">
            @foreach($postaccounts as $postaccount)
                <tr>
                    <th>{{ $postaccount -> created_at }}</th>
                    <td>{{ $postaccount -> reg }} </td>
                    <td>{{ $postaccount -> typing }}</td>
                    <td>{{ $postaccount -> photocopy }}</td>
                    <td>{{ $postaccount -> passport }}</td>
                    <td>{{ $postaccount -> graphic }}</td>
                    <td>{{ $postaccount -> others }}</td>
                    <td>{{ $postaccount -> expenses }}</td>
                    <td>{{ $postaccount -> income }}</td>

                    <td>
                        <a href="/readPost/{{ $postaccount -> id }}" class="label label-success">Read</a>
                        <a href="/editrecord/{{ $postaccount -> id }}" class="label label-primary">Update</a>
                        <a href="/delete/{{ $postaccount -> id }}" class="label label-danger">Delete</a>
                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    @else
        <div class="alert alert-warning">No Account Record Available</div>
    @endif
</div>
    </div>
        </div>
            


<!-- End DASHBOARD BODY section -->

@endsection