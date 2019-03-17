@extends('layouts.master')

@section('content')

<!-- Start DASHBOARD BODY section -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">

                <div class="panel panel-default">

                    <div class="panel-heading"><p style="color: #eb6003;">
                        <h3><b>DOWNLOAD FILES HERE</b></h3>

                    </div>
                    <div class="panel-body">
                        @if(session('status') != null)
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                            @endif
                        <div class="mytable">
                           
                           

                                    

                                    <table class="table table-striped">


                                        <thead style="background-color: #38010a; color: white;">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Title</th>
											<th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody style="color: black">
                                         
                                            
                                        <tr>
										<td>1</td>
										<td>Application Form</td>
							
										<td>
											<a href="/download" style="background: #333ab7; color: #fff; padding: 12px; display: block; text-decoration: none;"><i class="icon_download"></i> Download Now</a>
										</td>
										</tr>

                                            
                                        
                                        </tbody>
                                    </table>
                                
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- End DASHBOARD BODY section -->

 
@endsection

