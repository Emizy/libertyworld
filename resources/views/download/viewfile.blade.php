@extends('layouts.app')

@section('content')

div class="container" style="height: 700px">
    	<div class="col-md-10 col-md-offset-2" >
	<div class="row" style="padding-top: 10px;">
			<div class="panel panel-default" >
				<div class="panel-healding"> <h2>Display Student Record's</h2></div>

				<table>
					<tr>
						<table class="table">
							<tr>
								<td>File Title</td>
								<td>Date Uploaded</td>
								<td>Post Image</td>
								
							</tr>

							<?php
							foreach ($posts as $down) {
								?>
								<tr>
									<td>{{$down->post_title}}</td>
									<td>{{$down->created_at}}</td>
									<td>{{$down->post_image}}</td>
									

                                    <td>
                                        <a href="/post/{{ $StudForm -> id }}" class="label label-success">Read</a>
                                        <a href="{{url('stud_database'.$StudForm->id.'edit_student_record') }}" class="label label-primary">Update</a>
                                        <a href="/delete/{{ $StudForm -> id }}" class="label label-danger">Delete</a>
                                    </td>
								</tr>
                                
								<?php
							}
							?>
							
						</table>	
			</div>
		</div>
	</div>
                        
@endsection