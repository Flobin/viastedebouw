<?php
/**
 * Template name: no-sidebar
 *
 * @package Viastedebouw
 * @since Viasteebouw 1.0
 */

get_header(); ?>
	<div class="nosidebar">
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
	</div>
<?php get_footer(); ?>