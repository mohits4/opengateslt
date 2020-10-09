<?php
/**
 * Search Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

// @codingStandardsIgnoreFile
// Allow plugin text domain in theme.
?>

<?php do_action( 'bbp_template_before_search_results_loop' ); ?>

	<ul id="bbp-search-results" class="forums bbp-search-results">

		<li class="bbp-body">

			<?php while ( bbp_search_results() ) : bbp_the_search_result(); ?>

				<?php bbp_get_template_part( 'loop', 'search-' . get_post_type() ); ?>

			<?php endwhile; ?>

		</li><!-- .bbp-body -->

		<li class="bbp-footer">

			<div class="bbp-search-author"><?php  esc_html_e( 'Author',  'bbpress' ); ?></div>

			<div class="bbp-search-content">

				<?php esc_html_e( 'Search Results', 'bbpress' ); ?>

			</div><!-- .bbp-search-content -->

		</li><!-- .bbp-footer -->

	</ul><!-- #bbp-search-results -->

<?php do_action( 'bbp_template_after_search_results_loop' ); ?>