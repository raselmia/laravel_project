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
      
            Add Client review here
      
    </ol>
</div>
</div>
<!-- /.row -->



<!-- /.row -->

<div class="row">
<div class="col-md-2"></div>
<div class="col-lg-8" >
    {!! Form::open(array('route' => 'taap.review.store')) !!}
        <div class="row">
            <div class="col-md-12">
                <br/>
                {!! Form::label('client_name', 'Client Name') !!}
                {!! Form::text('client_name', null,array('class' => 'form-control','placeholder'=>'Add Client Name Here', 'required' => 'required','max'=>'300'))!!}
            </div>
              <div class="col-md-12">
                <br/>
                {!! Form::label('review', 'Review') !!}
                {!! Form::text('review', null,array('class' => 'form-control', 'placeholder'=>'Add User Review Here', 'required' => 'required')) !!}
            </div>
            
            <div class="col-md-12">
                <br/>
                <button type="submit" class="btn btn-success">Add Review</button>
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


