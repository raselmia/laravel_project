@extends('layouts.layoutadmin')

@section('title', 'Talents Assciates | Admin Dashboard')



  
 
@section('content')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">z
                        <h1 class="page-header">
                            Talents Assciates 
                        </h1>
                        <div>
                        <div class="row">
                        <div class="col-sm-2">
                      </div>
    
                        <div class="col-sm-10">
                        <div class="breadcrumb">
                          Profile Create 
                          
                          
                        </div>
                </div>
              </div>
        
           
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-lg-8" >
                        {!! Form::open(array('route' => 'taap.profile.store','enctype' => 'multipart/form-data','method'=>"POST",'')) !!}
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
                
              


            </div>
          
  

@endsection

