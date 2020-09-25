<footer class="footer container-fluid">
	  <div class="container">
	  	    <div class="row">
	  	   <div class="col-md-12 mx-auto">
			    <div class="row">
			         <div class=" col-4 col-md-8 col-lg-8">
			            <?php
						wp_nav_menu( array( 
						    'theme_location' => 'my-custom-footer', 
						    'container_class' => 'footer-menu-section' ) ); 
						?> 
			         </div>
			         <div class="col-8 small-screen">
			         	 <div class="row">
			                 <div class="col-md-12 small-email" >
			                      <span><a href="<?php the_field('email')?>"><i class="fa fa-envelope"></i> info@rainbowrace.com</a></span>
			                 </div>
			                 <div class="col-md-12 small-socialicon d-flex justify-content-end" data-aos="fade-eft">
			                      <a href="<?php the_field('twitter') ?>"><i class="fa fa-twitter-square twitter"></i></a>
			                      <a href="<?php the_field('facebook') ?>"><i class="fa fa-facebook-official facebook"></i></a>
			                      <a href="<?php the_field('instagram') ?>"><i class="fa fa-instagram instagram"></i></a>
			                 </div>
			             </div>
			         </div>

			         <div class="col-8 col-md-4 col-lg-4">
			                      <span class="email"><a href="<?php the_field('email')?>"><i class="fa fa-envelope"></i> info@rainbowrace.com</a></span>
			                 
			                 <span class="col-md-12 f-socialicon d-flex f-icon justify-end">
			                      <a href="<?php the_field('twitter') ?>"><i class="fa fa-twitter-square twitter"></i></a>
			                      <a href="<?php the_field('facebook') ?>"><i class="fa fa-facebook-official facebook"></i></a>
			                      <a href="<?php the_field('instagram') ?>"><i class="fa fa-instagram instagram"></i></a>
			                 </span>
			             </div>
			         </div>
			    </div>
			</div>
		    
	  </div>
	  </div>
</footer>
<div class="copy">
	<div class="container m-0">
		  <div class="row">
		  	    <div class="col-md-12 text-center copy-right text-center">
	               <h6><?php the_field('copyrig') ?></h6>
	           </div>
		  </div>
	</div>
</div>
<script>
  jQuery(document).ready(function(){	
    // jQuery('.home_img').css('min-height', jQuery(window).height()+'px');
    // jQuery(window).resize(function(){
    //     jQuery('.home_img').css('min-height', jQuery(window).height()+'px');
    // });
    
	jQuery('#menuToggle').on('click', function(){
		jQuery('#navbar').toggleClass('open');
		jQuery('#close_divs').toggleClass('open');
        jQuery('#menuToggle').toggleClass('open');
	}); 
	jQuery('#close_divs').on('click', function(){
		jQuery('#navbar').removeClass('open');
		jQuery(this).removeClass('open');
        jQuery('#menuToggle').removeClass('open');
	}); 
	jQuery('#navbar li a').on('click', function(){
		jQuery('#navbar').removeClass('open');
        jQuery('#menuToggle input').trigger('click');
	}); 
	
	
	// tabs content js code
	jQuery('.tabscontent li').on('click', function(){
        jQuery(this).addClass('active');
        jQuery(this).siblings().removeClass('active');
        var tabid   =   jQuery(this).attr('data-tab');
        jQuery('#'+tabid).addClass('active')
        jQuery('#'+tabid).siblings().removeClass('active');
    });
	
    jQuery('li.menu-item-has-children').append('<span id="submenu" class="mobilesubmenu"><i class="fa fa-plus"></i></span>');
    jQuery('.nav-bar li #submenu').on('click', function(){
        
       jQuery(this).parent().toggleClass('open');
       jQuery(this).parent().siblings().removeClass('open');
       jQuery(this).prev().toggleClass('open-submenu');
        jQuery(this).find('i').toggleClass('fa-plus fa-minus');
       jQuery(this).parent().siblings().find('#submenu').html('<i class="fa fa-plus"></i>');
    });
	
	// counter animation
	jQuery('.statcounts').one("mouseenter", function() {
        jQuery(".menu").toggleClass("active");
        jQuery('.statcounts span').each(function () {
        jQuery(this).prop('Counter',0).animate({
            Counter: jQuery(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    jQuery(this).text(Math.ceil(now));
                }
            });
        });
    });
    jQuery("ul.tabs-li li").click(function(e){
    jQuery('ul.tabs-li li').removeClass('active');
    jQuery(this).addClass("active");
     var get_id = jQuery(this).attr('id');
     console.log(get_id);
     jQuery('.careers-list-content').slideUp(0);
     jQuery('#'+get_id+'.careers-list-content').slideDown(0);

    });
	 
	  
});
      AOS.init({
  duration: 1000,
})
</script>

<?php wp_footer(); ?>
</body>
</html>