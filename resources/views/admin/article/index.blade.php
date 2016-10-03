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

<div class="row" >
<div class="col-md-12">
   
   @if(isset($_SESSION['status']))
   <p class="alert alert-success">{{$_SESSION['status']}}</p>
   <?php session_unset('status'); ?>
  
  @endif
  </div>
  </div>

            <h2 class="breadcrumb">Article list</h2> 
      
   

<div class="row">
	
	<div class="col-md-12">
		<table class="table table-bordered">
			<tr>
			   <th>Serial No.</th>
				<th>Title</th>
				<th>Summary</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
			<?php $i=0 ?>
			 @foreach($articles as $article)
			 <?php $i++ ?>
				<tr>
					<td>{{ $i }}</td>
					<td>{!!$article->title!!}</td>
					<td>{!! substr($article->summary, 0, 300) !!}{!! strlen($article->summary) > 300 ? "..." : "" !!}</td>
					<td><img src="{{URL::asset('/thumbnails/'.$article->image)}}" alt="Article Picture" height="150"></td>
					<td>
					<a href="{{route('taap.article.show',$article->id)}}" class="btn btn-success">View</a>
						<a href="{{route('taap.article.edit',$article->id)}}" class="btn btn-info">Edit</a>
						{!! Form::open(array('method'=>'DELETE', 'route'=>array('taap.article.destroy',$article->id)))!!}

                        {!! Form::submit('Delete', array('class'=>'btn btn-danger','onclick' => 'return confirm("Are you sure want to Delete?");'))!!}
                {!! form::close() !!}

					</td>
				</tr>
			
			@endforeach
			
		  </table>
           			
				<div class="text-center">
				{{ $articles->links() }}
			</div>


		</div>
		</div>
	</div>
	</div>


@endsection