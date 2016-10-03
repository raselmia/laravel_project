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
    <div>
    </div>
  <div class="row">
  <div class="col-sm-12">
  @if(isset($_SESSION['status']))
  <p class="alert alert-success">{{$_SESSION['status']}}</p>
  <?php session_unset('status');?>
  @endif
  </div>
  
  </div>
    <div class="breadcrumb">
       
            Notice list
   
    </div>

<div class="row">
	
	<div class="col-md-12">
		<table class="table table-bordered">
			<tr>
			   <th>id</th>
				<th>Notice Title</th>
				<th>Link</th>
				<th>Action</th>
			</tr>
			<?php $slNo = 1; ?>
			@foreach($notice as $notice)
				<tr>
					<td>{{ $slNo++ }}</td>
					<td>{{$notice->heading}}</td>
					<td>{{$notice->link}}</td>
					<td>
					
								<a href="{{route('taap.notice.show',$notice->id)}}" class="btn btn-success">View</a>
						
						
								<a href="{{route('taap.notice.edit',$notice->id)}}" class="btn btn-primary">Edit</a>
						
						
														
						{!! Form::open(array('method'=>'DELETE','route'=>array('taap.notice.destroy',$notice->id)))!!}

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