<?php /* Template Name: Homepage */ 

get_header();
?>
<div class="home-page container-fluid">
   	    
    
   	    <div class="row">
   	    	<div class="col-12 banner">
   	    	
   	    	</div>
   	    </div>

	<div class="container">
	    <div class="row">
	    	<div class=" col-12 col-md-12 mx-auto blue-block h-sec-1 " data-aos="fade-up">
	    		<h5 class="heading-h1">
	    			<?php the_field('section-1'); ?>
	    	    </h5>
	        </div>
	    </div>
	    <div class="row">
	    	  <div class="col-md-12 mx-auto h-sec-2"  data-aos="fade-down">
	    	  	    <div class="row">
	    	  	    	 <div class=" col-6 col-md-3">
	    	  	             <img src="<?php echo DIR; ?>/images/book1.jpg" class="img-fluid" alt="">
	    	             </div>
	    	  	    	 <div class=" col-6 col-md-3">
	    	  	             <img src="<?php echo DIR; ?>/images/book2.jpg" class="img-fluid" alt="">
	    	             </div>
	    	  	    	 <div class=" col-6 col-md-3 img-inner">
	    	  	             <img src="<?php echo DIR; ?>/images/book3.jpg" class="img-fluid" alt="">
	    	             </div>
	    	  	    	 <div class=" col-6 col-md-3 img-inner">
	    	  	             <img src="<?php echo DIR; ?>/images/book4.jpg" class="img-fluid" alt="">
	    	             </div>
	    	             <div class=" col-6 col-md-4 img-top d-flex justify-content-end" >
	    	  	    	 	  <img src="<?php echo DIR; ?>/images/book5.jpg" class="img-fluid" alt="">
	    	  	    	 </div>
	    	  	    	 <div class=" col-6 col-md-4 d-flex justify-content-center img-top">
	    	  	    	 	  <img src="<?php echo DIR; ?>/images/book6.jpg" class="img-fluid" alt="">
	    	  	    	 </div>
	    	  	    	 <div class=" col-6 col-md-4 mx-auto d-flex justify-center img-top ">
	    	  	    	 	  <img src="<?php echo DIR; ?>/images/book7.jpg" class="img-fluid" alt="">
	    	  	    	 </div>
	    	  	    </div>
	    	  </div>
	    </div>
  	   <div class="row">
  	   	    <div class="col-col-md-12 col-lg-7 blue-block" data-aos="fade-right" data-aos-delay="300">
  	   	    	 <p class="heading-h1"><?php the_field('text-section2') ?></p>
  	   	    </div>
  	   	    <div class="col-md-12 col-lg-5 sec-2 text-center" data-aos="zoom-in">
  	   	    	<img src="<?php echo DIR; ?>/images/gaemimg.png" class="img-fluid" alt="">
  	   	    </div>
  	   </div>
	    	  
	    
	    <div class="block" data-aos="fade-up">
	    	 <div class="row">
		    	  <div class="col-12 col-md-12 mx-auto blue-block h-sec-1">
		    		   <h5 class="heading-h1 heading-h1-mobile">
		    		   	   <?php the_field('text-section3') ?>
		    		   </h5>
		          </div>
	        </div>

	        <div class="row">
		    	 <div class=" col-12 col-md-12 mx-auto blue-block h-sec-6">
		    	 	   <h1 class="heading-h1">
		    	 	   	    <?php the_field('text-section4') ?>
		    	 	   </h1>
		    	 </div>
	        </div>
	    </div>

<!-- partial -->
	    <div class="row">
	    	 <div class="col-md-12 mx-auto blue-block h-sec-6  listen" data-aos="fade-down">
	    	 	   <h1 class="heading-h1" data-aos="fade-down" data-aos-delay="500">
	    	 	   	    <?php the_field('text-section5') ?><span class="change-color"><a href=" <?php the_field('text-section5-link') ?>">SEE SONG REVIEWS</a></span>

	    	 	   </h1>
	    	 </div>
	    </div>

	    <div class="row">
	    	 <div class="col-md-12 mx-auto blue-block h-sec-6" data-aos="fade-down" >
	    	 	   <div class="row">
	    	 	   	    <div class="col-md-4 text-center audio-block" data-aos="fade-right" data-aos-delay="300">
	    	 	   	    	  <span class="icon"><i class="fa fa-arrow-circle-left"></i></span>
	    	 	   	    	  <p class="change-color block-p">Book 1 Snippet </p>
	    	 	   	    </div>
	    	 	   	    <div class="col-md-4 text-center audio-block"  data-aos="fade-right" data-aos-delay="600">
	    	 	   	    	  <span class="icon"><i class="fa fa-arrow-circle-left"></i></span>
	    	 	   	    	  <p class="change-color block-p">Book 2 Snippet </p>
	    	 	   	    </div>
	    	 	   	    <div class="col-md-4 text-center audio-block"  data-aos="fade-right" data-aos-delay="900">
	    	 	   	    	  <span class="icon"><i class="fa fa-arrow-circle-left"></i></span>
	    	 	   	    	  <p class="change-color block-p">Book 7 Snippet </p>
	    	 	   	    </div>
	    	 	   </div>
	    	 </div>
	    </div>

	    <div class="row">
	    	 <div class="col-md-12 mx-auto blue-block h-sec-7"  data-aos="fade-right">
	    	 	   <h1 class="heading-h1 excting-1">
	    	 	   	   <?php the_field('checkout') ?>
                   </h1>
	    	 </div>
	    </div>

	    <div class="row">
	    	  <div class="col-md-12 mx-auto h-sec-8"  data-aos="fade-down">
	    	  	    <div class="row">
	    	  	    	 <div class=" col-6 col-md-3 mx-auto">
	    	  	             <img src="<?php echo DIR; ?>/images/img-1.jpg" class="img-set" alt="img-1.jpg">
	    	             </div>
	    	  	    	 <div class="col-6 col-md-3">
	    	  	             <img src="<?php echo DIR; ?>/images/img2.jpg" class="img-set" alt="img-2.jpg">
	    	             </div>
	    	  	    	 <div class="col-6 col-md-3 img-block">
	    	  	             <img src="<?php echo DIR; ?>/images/img-3.jpg" class="img-set" alt="img-3.jpg">
	    	             </div>
	    	  	    	 <div class="col-6 col-md-3 img-block">
	    	  	             <img src="<?php echo DIR; ?>/images/img-4.jpg" class="img-set" alt="img-4.jpg">
	    	             </div>
	    	             <div class="col-6 col-md-4 h-sec-9 mx-auto text-right">
	    	  	    	 	  <img src="<?php echo DIR; ?>/images/img5.jpg" class="img-set img-1" alt="img-5.jpg">
	    	  	    	 </div>
	    	  	    	 <div class="col-6 col-md-2 h-sec-9  mx-auto text-center">
	    	  	    	 	  <img src="<?php echo DIR; ?>/images/img-6.jpg" alt="img-6.jpg" class=" img-1 img-set">
	    	  	    	 </div>
	    	  	    	 <div class="col-6 col-md-5 h-sec-9  text-center mx-auto img-block ">
	    	  	    	 	  <img src="<?php echo DIR; ?>/images/img-7.jpg" class="img-set img-1" alt="img-7.jpg">
	    	  	    	 </div>
	    	  	    </div>
	    	  </div>
	    </div>

	    <div class="row">
	    	 <div class="col-md-12 blue-block mx-auto rainbow-text" data-aos="fade-right">
	    	 	  <h1 class="heading-h1  text-center">
	    	 	  	   <?php the_field('rainbow_text') ?>
	    	 	  </h1>
	    	 </div>
	    </div>

	    <div class="row">
	    	  <div class="col-md-12  img-ring mx-auto  text-center blue-block"  data-aos="fade-right">
                              <?php $image = get_field('rr-image'); ?>
	    	  	    <img src="<?php echo $image['url']; ?>" class="img-fluid"  alt="" data-aos="fade-down">
	    	  </div>
	    	  <div class="col-md-12 blue-block course-block mx-auto" data-aos="fade-right">
	    	  	    <h1 class="heading-h1">
	    	  	    	  <span class="change-color"><i class="fa fa-star"></i>Buy the App  <i class="fa fa-star"></i></span>ENJOY THE RIDE!! <span class="change-color"><i class="fa fa-star"></i>  Buy The Course<i class="fa fa-star"></i></span>
	    	  	    </h1>
	    	  </div>
	    </div>
    </div>		
  </div>
 </section>
 <?php
get_footer();
?>