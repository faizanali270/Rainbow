
<?php get_header();   ?> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( '' );
			}


		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/main', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
	<?php
get_template_part('template/main');

get_footer(); ?>