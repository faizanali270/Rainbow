      <!-- Book-4 page -->
        <div class="review-section container-fluid">
          <div class="row">
            <div class="col-12 banner">
                
            </div>
        </div>
        
        <div class="container" data-aos="fade-down" >  
             <!-- Heading -->
             <div class="row">
                 <div class=" col-12 col-md-12 mx-auto review-heading padding_top">
                   <h4 class="review-heading-1"><?php the_field('book-4-heading') ?></h4>
                 </div>
             </div>
            
            <!-- heading-2 -->
             <div class="row">
                  <div class="col-12 col-md-12 review-heading">
                      <h4 class="review-heading-2">
                          <?php the_field('book-4-heading2') ?>
                      </h4>
                  </div>
             </div>

            <!-- section-1 -->
            <div class="row">
               <div class="col-12 col-md-12 ml-auto review-block-section">

                   <!-- -text-1 -->
                   <div class="row">
                        <div class="col-12 col-md-12 book3-img">
                               <?php $image = get_field('image-1') ?>
                            <img src="<?php echo $image['url'];?>" class="img-fluid" alt="">
                        </div>
                   </div>

                   <!-- text-2 -->
                   <div class="row">
                        <div class="col-12 col-md-12 book3-img">
                            <img src="<?php echo DIR; ?>/images/book-4-reviews.jpg" class="img-fluid" alt="">
                        </div>
                   </div>

                </div>
            </div>

        </div>   
    </div>
