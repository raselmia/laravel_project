@extends('layouts.layoutone')

@section('title', 'Talents Associates | Welcome')

@section('content')
<style>

.panel a{
    pointer-events:none;

}

	</style>

	<section id="featured">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="{{ asset('dist/img/slides/1.jpg')}}" alt="img" />
                <div class="flex-caption">
                    <h2>TALENTS ASSOCIATES </h2> 
		<p>An integrated professional services house 
                    Management, HR & Legal Consultants</p>  
                </div>
              </li>
              <li>
                <img src="{{ asset('dist/img/slides/2.jpg')}}" alt="img" />
                <div class="flex-caption">
                     <h2>TALENTS ASSOCIATES </h2> 
		<p>An integrated professional services house 
                    Management, HR & Legal Consultants</p>
	 
                </div>
              </li>
              <li>
                <img src="{{ asset('dist/img/slides/3.jpg')}}" alt="img" />
                <div class="flex-caption">
                     <p style="font-size:24px">TALENTS ASSOCIATES </p> 
		<p>An integrated professional services house 
                    Management, HR & Legal Consultants</p>  
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
 
 
	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
		<div class="col-md-4">
		<img src="{{ asset('dist/img/people.png')}}" alt="img" width="100%"/>
		</div>
			<div class="col-md-8">
				<div><h1><span class="blue_text">Welcome!!</span></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span><p class="para"><strong class="para">TA</strong> is an integrated professional services house endeavoring all kinds of Business Management, HR and Legal support for any trading, non-trading, manufacturing and service organizations by a group of professional talents with multifaceted academic and practical working background.     </p>
				<p><strong>TA</strong> started its journey with a mission to establish itself as a premier professional consulting firm with one stop Business Management, HR and Legal solutions in Bangladesh</p>
				<p><strong>TA</strong> specially works in the fields of Business set-up & Corporate Management, Human Resources Management (HRM), Labour Law, Company Law, Income Tax, VAT, Industrial set up & Feasibility Study, Project Profile, Project Evaluation, Accounting & Financial Management System, and ISO matters. It also acts as Head Hunter, HR out sourcing and Professional Trainer. 
				<p>A group of highly educated and experienced professionals associated with TA. </p>
</p>
				</div>
			</div>
		</div>
		
	</div>
	</section>
	<section id="content">
	
	
	<div class="container">
		
	     <div class="row">
							<div class="col-md-8">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h1><span style="color:#428bca;">Article</span></h1>
								</div>
								 @foreach($articles as $article)
								<div>
								<h4> {!!$article->title!!}</h4>
								<div>{!! substr($article->summary, 0, 500) !!}{!! strlen($article->summary) > 200 ? "..." : "" !!}</div>
								<br><br>
								<a href="{{url('article_view/'.$article->id)}}" class="btn btn-success pull-right" >Read More </a>
								</div>
								<br><br>
								@endforeach
								
									
									<div class="text-center">
											{!! $articles->links(); !!}
											</div>

								</div>
														
								
							<div class="col-md-4">

						<form class="form-search" method="get" id="s" action="{{url('search')}}">
							<div id="custom-search-input">
							    <div class="input-group col-md-12">
							        <input type="text" class="form-control" name="s" placeholder="search article" />
							        <span class="input-group-btn">
							            <button class="btn btn-info" type="submit">
							                <i class="fa fa-search"></i>
							            </button>
							        </span>
							    </div>
							</div>
						</form>















								
								<div class="block-heading-two">
									<h3><span><a href= "http://talentsassociates.com/service">Our Services</a></span></h3>
								</div>		
								<!-- Accordion starts -->
								<div class="panel-group" id="accordion-alt3">
								 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
								  <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
											<i class="fa fa-hand-o-up" aria-hidden="true"></i><a href="">Business Set up & Corporate Management 
										  </a>
										</h4>
									 </div>
									
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
											<i class="fa fa-hand-o-up" aria-hidden="true"></i> <a href="" >Bank Loan & Financial Management
										  </a>
										</h4>
									 </div>
									
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
											<i class="fa fa-hand-o-up" aria-hidden="true"></i><a href=""> Human Resources Management 
										  </a>
										</h4>
									 </div>
									 </div>
									 
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-hand-o-up" aria-hidden="true"></i><a href=""> Head Hunting, HR Out Sourcing
										  </a>
										</h4>
									 </div>
									</div>
									
						

								  	 <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-hand-o-up" aria-hidden="true"></i> <a href="">Training & Development
										  </a>
										</h4>
									 </div>
									 
								  </div>

								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-hand-o-up" aria-hidden="true"></i><a href="">ISO 9001: 2008/2015
										  </a>
										</h4>
									 </div>
									
								  </div>
									<div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
										<i class="fa fa-hand-o-up" aria-hidden="true"></i><a href="">Labour Law & Industrial Relations
										  </a>
										</h4>
									 </div>
									
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-hand-o-up" aria-hidden="true"></i><a  href="">Company Law
										  </a>
										</h4>
									 </div>
									
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-hand-o-up" aria-hidden="true"></i><a href="">Taxation & VAT
										  </a>
										</h4>
									 </div>
									
								  </div>

							
								<!-- Accordion ends -->
								<div class="block-heading-two">
									<h3><span>Notice List</span></h3>
									<div style="height:200px; overflow:scroll;">
									@foreach($notices as $notice)
										<h5 style="padding:3px 0;">
										<span class="fa fa-calendar"></span>
										<a style="font-weight:none" href="{!!$notice->link!!}" target="_blank">{!!$notice->heading!!}</a>
										</h5>
										@endforeach
										
									</div>
								</div>
								
							
							
					
					</div>		
			</div>


						
	</div>
	</div>
	
	</section>
	<div class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container-fixed" style="height:70px,overflow:hidden"> 
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $Num = 0; ?>
					@foreach($reviews as $row)
					@if ($Num==0)
                    <li data-target="#carousel-example-generic" class="active" data-slide-to="{{ $Num++ }}" >
                        
                    </li>
                    @else
                    <li data-target="#carousel-example-generic" class="" data-slide-to="{{ $Num++ }}" >
                       
                    </li>
                    @endif
                    @endforeach
                    
                </ol>
                <div class="carousel-inner">
                     <?php $sl = 0; ?>
                    @foreach($reviews as $review)
                     @if ($sl==0)
                     <div class="item active" >
                     @else
                    <div class="item">
                    @endif
                        <p>{{$review->review}}</p>
                        <p>
                            <b>- {{$review->client_name}} -</b>
                        </p>
                    </div>
                     <?php $sl++; ?>
                    @endforeach
                  
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
@endsection
