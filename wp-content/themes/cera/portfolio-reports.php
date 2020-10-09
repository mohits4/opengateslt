<?php 
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 template Name: Company Navigation View
 * @package WordPress
 * 
 */

get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<?php
                	$paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
                	$args = array(
					    'post_type'      => 'page',
					    'posts_per_page' => 10,
					    'post_parent'	 => $post->ID,
					    'paged' 		 => $paged,
					    'order'			 => 'ASC',
					    'orderby'		 => 'menu_order'
					    
					 );
					$parent = new WP_Query($args);
                		
					  while ( $parent->have_posts() ) : $parent->the_post(); 
                		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
				//print_r($featured_img_url);
  
                ?>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="shad-box" style="background-image:url('<?php echo $featured_img_url; ?>')">
						<a href="<?php echo get_the_permalink(); ?>">
						<span>
						<!-- <h4><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4> -->
						<!--<p><?php the_content(); ?></p>-->
						</span>
						</a>
					</div>
				</div>
				
			<?php endwhile;  ?>
			</div>
			<?php 
			// Code For pagination
				if(function_exists('wp_pagenavi')) {
				  wp_pagenavi(array( 'query' => $parent ));
				  }
				  wp_reset_postdata();
			 ?>
		</div>
	</div>
</div>

<?php  get_footer(); ?>
