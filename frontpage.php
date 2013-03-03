<?php
/*
 Template name: frontpage
 * @package viastedebouw
 * @since viastedebouw 1.0
 */

get_header(); ?>

		<div id="frontpage-top" class="widget-area">
			<?php if ( ! dynamic_sidebar( 'frontpage-top' ) ) : ?>
				<p>nothing</p>
			<?php endif; ?>
		</div>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

		<div id="frontpage-bottom" class="widget-area">
			<?php if ( ! dynamic_sidebar( 'frontpage-bottom' ) ) : ?>
				<p>nothing</p>
			<?php endif; ?>
		</div>


<?php get_footer(); ?>