@extends('layouts.layoutone')

@section('title', 'Talents Associates | ')

@section('content')

<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->

</div>
<div class="row">
     <div  class="col-md-8 col-md-offset-2">
     <h1></h1>
    
   
       </div>
       </div>
       <div class="row">
   	
<div class="col-md-8 col-md-offset-2">

<img src="{{URL::asset('/thumbnails/'.$article->image)}}" alt="Article Picture" height="300">
	<h2><strong>{{$article->title}}</strong></h2>
  <div class="col-md-">
     <span style="text-align: justify;">{!! $article->details !!}</span>
   
  </div>
</div>
</div>
@stop