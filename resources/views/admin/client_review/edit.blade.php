<?php
  session_start()
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
       
         Add Notice Here
       
   
</div>

<!-- /.row -->



<!-- /.row -->

<div class="row">
<div class="col-md-2"></div>
<div class="col-lg-8" >
    {!!Form::model($review,['route'=>['taap.review.update',$review->id],'method'=>'PUT'])!!}
        <div class="row">
            <div class="col-md-12">
                <br/>
                {!! Form::label('client_name', 'Client Name') !!}
                {!! Form::text('client_name', null,array('class' => 'form-control','placeholder'=>'Add Client Name Here', 'required' => 'required','max'=>'300'))!!}
            </div>
              <div class="col-md-12">
                <br/>
                {!! Form::label('review', 'Review:') !!}
                {!! Form::text('review', null,array('class' => 'form-control', 'placeholder'=>'Add User Review Here', 'required' => 'required')) !!}
            </div>
            
            <div class="col-md-12">
                <br/>
                <button type="submit" class="btn btn-success">Update</button>
               
            </div>
        </div>
    {!! Form::close() !!}
</div>
</div>

<!-- /.row -->


</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@endsection

