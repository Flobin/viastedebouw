<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package viastedebouw
 * @since viastedebouw 1.0
 */

get_header(); ?>

		<section id="primary" class="content-area">
			<div id="content" class="site-content graduate_passport_archive" role="main">

			<?php if ( have_posts() ) : ?>


				<header class="page-header">
					<h1 class="page-title">
						Graduate passports
					</h1>
				</header><!-- .page-header -->

                <ul class="graduate_passport_list">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

                    <li>
    					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </li>

				<?php endwhile; ?>
                </ul>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</section><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
