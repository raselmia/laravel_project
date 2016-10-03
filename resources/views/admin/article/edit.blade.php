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
                             Update Your Article here
                            </li>
                        </div>
                  </div>
                <!-- /.row -->


                
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-lg-8" >
                         {!!Form::model($article,['route'=>['taap.article.update',$article->id],'method'=>'put','files' => true])!!}
                            <div class="row">
                                <div class="col-md-12">
                                    <br/>
                                    {!! Form::label('title', 'Title:') !!}
                                    {!! Form::text('title', null,array('class' => 'form-control','placeholder'=>'Add Title', 'required' => 'required')) !!}
                                </div>
                                <div class="col-md-12">
                                    <br/>
                                    {!! Form::label('summary', 'Summary:') !!}
                                    {!! Form::textarea('summary', null,array('class' => 'form-control','placeholder'=>'Add Summary Article', 'rows' => 2, 'cols' => 40, 'required' => 'required' )) !!}
                                </div>
                                <div class="col-md-12">
                                    <br/>
                                    {!! Form::label('details', 'Details:') !!}
                                    {!! Form::textarea('details', null,array('class' => 'form-control','placeholder'=>'Add Details Article', 'required' => 'required')) !!}
                                </div>
                                <div class="col-md-12">
                                    <br/>
                                    {!! Form::label('image', 'Article Image:') !!}
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
