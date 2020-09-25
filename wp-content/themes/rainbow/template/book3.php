      <!-- About us page -->
        <div class="review-section container-fluid">
          <div class="row">
            <div class="col-12 banner">
                
            </div>
        </div>
        
        <div class="container"  data-aos="fade-down" data-aos-delay="500">  
             <!-- Heading -->
             <div class="row">
                 <div class=" col-12 col-md-12 mx-auto review-heading padding_top">
                   <h4 class="review-heading-1"><?php the_field('book-3-heading') ?></h4>
                 </div>
             </div>
            
            <!-- heading-2 -->
             <div class="row">
                  <div class="col-12 col-md-12 review-heading">
                      <h4 class="review-heading-2">
                           <?php the_field('book-3-heading-2') ?>
                      </h4>
                  </div>
             </div>

            <!-- purchase-section-1 -->
            <div class="row">
               <div class="col-12 col-md-12 ml-auto review-block-section">

                   <!-- -text-1 -->
                   <div class="row">
                        <div class="col-12 col-md-12 book3-img">
                            <?php $image = get_field('image-1') ?>
                            <img src="<?php echo $image['url'] ?>" class="img-fluid" alt="">
                        </div>
                   </div>

                   <!-- text-2 -->
                   <div class="row">
                        <div class="col-12 col-md-12 book3-img">
                            <img src="<?php echo DIR; ?>/images/book-3-reviews.jpg" class="img-fluid" alt="">
                        </div>
                   </div>

                </div>
            </div>

        </div>   
    </div>