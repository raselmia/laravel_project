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
    <ol class="breadcrumb">
        
             Review
      
    </ol>
</div>
</div>
<div class="row">
     <div  class="col-md-8 col-md-offset-2">
     <h1>Review</h1>
         <hr>
   
       </div>
       </div>
       <div class="row">
   	
<div class="col-md-8 col-md-offset-2">

	<h2><strong>Client Name:</strong>{{$review->client_name}}</h2>
	<p><strong>Review:</strong>{{$review->review}}</p>

<hr>
</div>
<div>
</div>
@stop
