<?php session_start();
?>
@extends('layouts.layoutadmin')

@section('title', 'Talents Associates | Admin Dashboard')

@section('content')

<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">
        Talents Associates 
    </h1>
    </div>
    </div>
    <div class="row">
<div class="col-lg-12">
    @if(isset($_SESSION['status']))
    <p class="alert alert-success">{{$_SESSION['status']}}</p>
    <?php session_unset('status');?>
    </div>
    </div>
    @endif
    <div class="breadcrumb">
     
            Review list
       
   
</div>

<div class="row">
	
	<div class="col-md-12">
		<table class="table table-bordered">
			<tr>
			   <th>Serial No</th>
				<th>Client Name</th>
				<th>Review</th>
				<th>Action</th>
			</tr>
			<?php $slNo = 1; ?>
			@foreach($reviews as $review)
				<tr>
					<td>{{$slNo++}}</td>
					<td>{{$review->client_name}}</td>
					<td>{{$review->review}}</td>
					<td>
						
								<a href="{{route('taap.review.show',$review->id)}}" class="btn btn-success">View</a>
						
							
								<a href="{{route('taap.review.edit',$review->id)}}" class="btn btn-primary">Edit</a>
						
														
						{!! Form::open(array('method'=>'DELETE','route'=>array('taap.review.destroy',$review->id)))!!}

                        {!! Form::submit('Delete', array('class'=>'btn btn-danger','onclick' => 'return confirm("Are you sure want to Delete?");'))!!}
                        {!! Form::close() !!}
						
                       
					
						


					</td>
				</tr>
			@endforeach


		</table>
		</div>
		</div>
	{{-- <div>
		{!!$notice->links();!!}

	</div> --}}


@endsection