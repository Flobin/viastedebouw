<?php
/**
 * @package viastedebouw
 * @since viastedebouw 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="graduate-thumbnail"><?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail(array(300,300));
			}
		?></div>
		<h1 class="entry-title graduate-name"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<section class="entry-content">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'viastedebouw' ), 'after' => '</div>' ) ); ?>
	</section><!-- .entry-content -->
    <section class="entry-content">
        <hr>
        <table class="graduate-passport-table">
            <tr>
                <td class="left">Profielschets</td>
                <td><?php the_field('profielschets'); ?></td>
            </tr>
            <tr>
                <td class="left">Afstudeeronderwerp</td>
                <td><?php the_field('afstudeeronderwerp'); ?></td>
            </tr>
            <tr>
                <td class="left">Afstudeerverslag</td>
                <td><?php the_field('afstudeerverslag'); ?></td>
            </tr>
            <tr>
                <td class="left">Status Quo</td>
                <td><?php the_field('status_quo'); ?></td>
            </tr>
            <tr>
                <td class="left">Website</td>
                <td><?php the_field('website'); ?></td>
            </tr>
            <tr>
                <td class="left">Linkedin</td>
                <td><?php the_field('linkedin'); ?></td>
            </tr>
        </table>
    </section>


	<footer class="entry-meta">
		<?php

			printf(
				$meta_text,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'viastedebouw' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
