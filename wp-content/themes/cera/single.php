<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cera
 */

get_header();
//get_sidebar('primary'); ?>
<style type="text/css">
	.entry-meta {
		display: none !important;
	}
</style>
	<div id="primary" class="region__col region__col--2 content-area">
		<main id="main" class="site-main">
<button type="button"  onclick="history.back();"> Back</button>

<?php 
//if ( is_active_sidebar( 'custom-side-bar' ) ) :
  //  dynamic_sidebar( 'custom-side-bar' );
 //endif;
  ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				
					get_template_part( 'template-parts/content', 'single' ); 
					do_action( 'cera_the_post_navigation' ); 
				
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar( 'right' );
get_footer();
