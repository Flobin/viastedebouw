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
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( array(100, 100) ); ?>
                            <?php endif; ?>
                            <h2><?php the_title(); ?></h2>
                        </a>
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
