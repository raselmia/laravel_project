<?php 
session_start();

?>

@extends('layouts.layoutadmin')

@section('title', 'Talents Assciates | Admin Dashboard')

@section('content')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Talents Assciates 
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

                        </div>
                        <div>

                        <div class="breadcrumb">
                            <li class="active">
                             Update Your Profile Here
                            </li>
                        </div>
                  </div>
                <!-- /.row -->


                
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-lg-8" >
                        {!!Form::model($about,['route'=>['taap.profile.update',$about->id],'method'=>'put','files' => true])!!}
                            <div class="row">
                                <div class="col-md-12">
                                    <br/>
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null,array('class' => 'form-control','placeholder'=>'Enter Your  Name', 'required' => 'required')) !!}
                                </div>
                                <div class="col-md-12">
                                    <br/>
                                    {!! Form::label('actor', 'Company Role:') !!}
                                   {!! Form::select('actor', array('select'=>'select','Lead Consultant' => 'Lead Consultant','Associates' => 'Associates')
                                 
                            );!!}
                                    
                                </div>
                                <div class="col-md-12">
                                    <br/>
                                    {!! Form::label('details', 'Desingnation:') !!}
                                    {!! Form::textarea('details', null,array('class' => 'form-control','placeholder'=>'Add Details Article', 'required' => 'required')) !!}
                                    
                                </div>
                                <div class="col-md-12">
                                    <br/>
                                    {!! Form::label('image', 'Profile Image:') !!}
                                    {!! Form::file('image', array('class' => 'image')) !!}
                                </div>
                                <div class="col-md-12">
                                    <br/>
                                    <button type="submit" class="btn btn-success"> Update Article</button>
                                    <button type="reset" class="btn btn-success">Reset</button>
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
