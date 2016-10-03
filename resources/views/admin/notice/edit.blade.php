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
       <?php  session_unset('status');?> 
    </h1>
    </div>
    </div>
    @endif
    
    <div class="breadcrumb">
        <li class="active">
          </i> Update Notice Here
        </li>
    </div>


<div class="row">
<div class="col-md-2"></div>
<div class="col-lg-8" >
    {!!Form::model($notice,['route'=>['taap.notice.update',$notice->id],'method'=>'PUT'])!!}
        <div class="row">
            <div class="col-md-12">
                <br/>
                {!! Form::label('heading', 'Heading:') !!}
                {!! Form::text('heading', null,array('class' => 'form-control','placeholder'=>'Add Title', 'required' => 'required','max'=>'300'))!!}
            </div>
              <div class="col-md-12">
                <br/>
                {!! Form::label('link', 'Link:') !!}
                {!! Form::text('link', null,array('class' => 'form-control', 'placeholder'=>'Add Title', 'required' => 'required')) !!}
            </div>
            
            <div class="col-md-12">
                <br/>
                <button type="submit" class="btn btn-success">Update</button>
               
            </div>
        </div>
    {!! Form::close() !!}
</div>
</div>



</div>


</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.4.3/jquery.tinymce.min.js"></script>

@endsection

