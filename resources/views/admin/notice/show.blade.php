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
       
         Notice
      
    </ol>
</div>
</div>
<div class="row">
     <div  class="col-md-8 col-md-offset-2">
     <h1>Notice</h1>
         <hr>
   
       </div>
       </div>
       <div class="row">
   	
<div class="col-md-8 col-md-offset-2">

	<h2><strong>Notice TitLe:</strong>{{$notice->heading}}</h2>
	<p><strong>Link:</strong>{{$notice->link}}</p>

<hr>
</div>
<div>
</div>
@stop
