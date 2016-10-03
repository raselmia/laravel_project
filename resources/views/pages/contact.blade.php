<?php 
session_start();
?>
@extends('layouts.layoutone')
@section('title', 'Talents Associates | Contact Us')

@section('content')

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	
	<div class="container">
	<div class="row">


			<div class="col-md-6">
				@if(Session::has('status'))
				<div class="alert alert-success">{!!Session::get('status')!!}</div>
				@endif
				@if(isset($_SESSION['status']))
				<div class="alert alert-success">{{ $_SESSION['status'] }}</div>
				<?php session_unset('status'); ?>
				@endif
				<h4> For any information please contact us !</h4>
				


				<div class="contact-form">
					<form id="contact-form" role="form" action="{{url('mail')}}" method="post">

						<div class="form-group has-feedback">
						<input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">
							<label for="name">Name*</label>
							<input type="text" class="form-control" id="name" name="name" required="required" placeholder="">
							<i class="fa fa-user form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label for="email">Email*</label>
							<input type="email" class="form-control" id="email" name="email" required="required"  placeholder="">
							<i class="fa fa-envelope form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label for="subject">Subject*</label>
							<input type="text" class="form-control" id="subject" name="subject" required="required"  placeholder="">
							<i class="fa fa-navicon form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label for="message">Message*</label>
							<textarea class="form-control" rows="6" id="message" name="message" required="required"  placeholder=""></textarea>
							<i class="fa fa-pencil form-control-feedback"></i>
						</div>
						<input type="submit" value="Submit" id='btn'class="btn btn-default">
					</form>
					</div>
					</div>
		
				<div class="col-md-6">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3124.584445351052!2d90.40658261445547!3d23.730175595466672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f6df37564d%3A0x655837ab00da5991!2sMeherba+Plaza!5e1!3m2!1sen!2sbd!4v1472741447323" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
	</div>
	</div>
	</section>


<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

@endsection
