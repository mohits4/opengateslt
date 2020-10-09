<?php 
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 template Name:OGC-Reports Table view
 * @package WordPress
 * 
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<button type="button"  onclick="history.back();"> Back</button>

			<div class="row">
				<div class="col-12" style="background-color: #e3e3e3">
				<table class="table table-striped table-condensed" >
					<thead>
						<tr style="border-bottom: 2px solid #000 " >
							<th width="30%">Reports</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<?php
		                	$paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
		                	$args = array(
							    'post_type'      => 'page',
							    'posts_per_page' => 10,
							    'post_parent'    => $post->ID,								
							    'paged' 		 => $paged,
								'order'			 => 'ASC',
								'orderby'		 => 'menu_order'
							 );
							$parent = new WP_Query($args);
		                		
							  while ( $parent->have_posts() ) : $parent->the_post(); 
		                		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		  
		                ?>
						<tr style="border-bottom: 2px solid #000;">								
							<td><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></td>
							<td><a href="<?php echo get_the_permalink(); ?>"><?php the_field('content'); ?></a></td>
															
							</tr>					
						<?php endwhile;  ?>
					</tbody>
				</table>
			  </div>
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

<?php get_footer(); ?>
