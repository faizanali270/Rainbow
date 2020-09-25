<?php /* Template Name: mytemplate */ 

get_header();
?>
<section id="content" class="entry-content" role="main">
    
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('template/'.$pagename); ?>
  <?php endwhile; endif; ?>
</section>
<?php
get_footer();
?>
