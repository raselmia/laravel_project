@extends('layouts.layoutadmin')

@section('title', 'Talents Associates | Admin Dashboard')

@section('content')

<div id="page-wrapper">

<div class="container-fluid">

       <div class="row">
   	
<div class="col-md-8 col-md-offset-2">
<img src="{{URL::asset('/thumbnails/'.$article->image)}}" alt="Article Picture" height="300">
	<h2><strong>{!!$article->title!!}</strong></h2>
  <p><strong>{!!$article->details!!}</strong>
  </p>
	</div>
</div>
</div>
</div>
@stop