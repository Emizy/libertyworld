@extends('layouts.app')

@section('content')

<!-- Student List Dashboard -->
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #70389C; color: white;"><h4>Display Student Record's</h4></div>
                <div class="panel-body">
               
              

                <table>
                    <tr>
                        <table class="table">
                            <tr>
                                <td>ID</td>
                                <td>FullName</td>
                                <td>Telephone</td>
                                <td>E-mail</td>
                                <td>Gender</td>
                                <td>Payment Type</td>
                                <td>Amount</td>
                                <td>Access Code/Password</td>
                            </tr>

                            <?php
                            foreach ($StudForms as $StudForm) {
                                ?>
                                <tr>
                                    <td><?php echo $StudForm ->id ?></td>
                                    <td><?php echo $StudForm ->fullname ?></td>
                                    <td><?php echo $StudForm ->telephone ?></td>
                                    <td><?php echo $StudForm ->email ?></td>
                                    <td><?php echo $StudForm ->gender ?></td>
                                    <td><?php echo $StudForm ->payment ?></td>
                                    <td><?php echo $StudForm ->amount ?></td>
                                    <td><?php echo $StudForm ->access_code ?></td>

                                    <td>
                                        <a href="#" class="label label-success">Read</a>
                                    </td>
                                </tr>
                                
                                <?php
                            }
                            ?>
                            
                        </table>    
            </div>
        </div>
    </div>
</div>  
</div>                      

<!-- End DASHBOARD BODY section -->


@endsection