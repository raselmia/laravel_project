@extends('layouts.layoutadmin')

@section('title', 'Talents Associates | Admin Dashboard')

@section('content')

<div id="page-wrapper">

<div class="container-fluid">

       <div class="row">
   	
<div class="col-md-8 col-md-offset-2"> 
<br><br>
<img src="{{URL::asset('/thumbnails/thumb_'.$about->image)}}" alt="Profile Picture" height="300">
	<h3>{!!$about->name!!}</h3>
	<h4>{!!$about->actor!!}</h4>
  <p><strong>{!!$about->details!!}</strong>
  </p>
	</div>
</div>
</div>
</div>
@stop