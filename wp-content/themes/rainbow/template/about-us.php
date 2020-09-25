<!-- About us page -->
<div class="page-bg container-fluid">
    <div class="row">
      <div class="col-12 banner">
          
      </div>
    </div>
          
    <div class="container">
      <!-- About Heading -->
       <div class="row">
           <div class=" col-12 col-md-12 mx-auto rainbow-heading" data-aos="fade-down">
            <h4 class="page-heading rainbow-heading-1">ABOUT US</h4>
           </div>
       </div>

       <!-- About-section -->
       <div class="row">
          <div class="col-12 col-md-12 mx-auto rainbow-text-section">
             
             <!-- Love-image -->
             <div class="row">
                  <div class="col-11 col-md-10 ml-auto">
                     <div class="love-image mx-auto" data-aos="zoom-in">
                          <img src="<?php echo DIR; ?>/images/about-img.png" class="img-fluid" alt="Love">
                     </div>
                  </div>
             </div>

              <!-- About-block-1 -->
               <div class="row">
                  <div class="col-12 col-md-12 page-text">
                          <?php the_field('about_content') ?>
                    </div>
               </div>

          </div>
        </div>
    </div>
</div>


