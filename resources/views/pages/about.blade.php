@extends('layouts.layoutone')
@section('title', 'Talents Associates | About Us')

@section('content')

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">About Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
			 


<?php 
$i=0;
echo '<div class="row">';

foreach($abouts as $about) {
	if($about->actor=="Lead Consultant"){
		echo '<div class="col-md-12"><center>';
    	?>
   	


    	<div class="ecom-ui ecom-ui-two">
    	    <div class="img-container">
    	       <img class="thumnails" src="{!!URL::asset('/thumbnails/thumb_'.$about->image)!!}" alt="Profile Picture" 
    	       height="300"></a>
    	    </div>
    	<div class="product-details">
    	      
    	        <h4><?php echo $about->actor;?></h4>
    	        <h4><span"><?php echo $about->name; ?></span></h4>
    	        <div class="clearfix"></div>
    	        <p>{!!$about->details!!}.</p>
    	        <div>
    	            
    	            <div class="clearfix"></div>
    	        </div>
    	    </div>
    	</div>
    	</center>



    	</div>
    	<?php
    	
    	echo '</div><div class="row">';
	}
    
}













echo '<class="row">';

foreach($abouts as $about) {
	if($about->actor!="Lead Consultant"){
    	echo '<div class="col-md-4"><center>';
    	?>
   	
    	<div class="ecom-ui ecom-ui-two">
    	    <div class="img-container">
    	       <img class="thumnails" src="{!!URL::asset('/thumbnails/thumb_'.$about->image)!!}" alt="Profile Picture" 
    	       height="300"></a>
    	    </div>
    	<div class="product-details">
    	      
    	        <h4><?php echo $about->actor;?></h4>
    	        <h4><span"><?php echo $about->name; ?></span></h4>
    	        <div class="clearfix"></div>
    	        <p>{!!$about->details!!}.</p>
    	        <div>
    	            
    	            <div class="clearfix"></div>
    	        </div>
    	    </div>
    	</div>
    	<!-- Ecommerce UI #2 -->
    	</div>
    	<?php
    	$i++;
    	if ($i%3 == 0) echo '</center></div><div class="row">';
    }
} ?>
</div><br/>
<div class="container">

<div class="row">
						<div class="col-md-12">
						<p><strong>*</strong>A group of qualified executives and on call Experts are there.  </p>
									
								</div>		
							

						</div>
							<div class="row">
							<div class="col-md-4">
								<h4 class="widgetheading">ADVISORY TEAM</h4>
					<address>
					<strong>Professor Dr. N A Khan, PhD <br>
					M. N Huda Monsury, FCA<br> 
                   M. J. Islam, ACA, Advocate <br>
                     Mansur Ahmed, FCMA <br>
                     M. S. Ali, MBA(HR), PGDPM, FIPM, CAHRI	 </strong>

                        </address>
				</div> 
							
							
						<!-- Our team ends -->
					  
						
					</div>
						
					
						</div>		
				
</div>
					
     
	</section>
	

<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

@endsection