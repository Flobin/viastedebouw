<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package viastedebouw
 * @since viastedebouw 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!--<?php do_action( 'viastedebouw_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'viastedebouw' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'viastedebouw' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'viastedebouw' ), 'viastedebouw', '<a href="http://robinberghuijs.com" rel="designer">Robin Berghuijs</a>' ); ?>-->
			<h3>VIA wordt gesponsord door:</h3>
			<a href="http://www.burolubbers.nl/" title="buro lubbers"><img class="sponsor" src="<?php bloginfo('template_directory') ?>/img/build/burolubbers.jpg" alt="buro lubbers" title="buro lubbers" /></a>
			<a href="http://www.vectorworks.nl/?utm_source=viavia&utm_medium=website&utm_campaign=viavia_sponsoring_tu-eindhoven" title="logoVectorworks2016png"><img class="sponsor" src="<?php bloginfo('template_directory') ?>/img/build/logoVectorworks2016.png" alt="logoVectorworks2016" title="logoVectorworks2016png"/></a>
			<a href="http://www.bouwkundebedrijvendagen.nl/" title="bouwkunde bedrijvendagen"><img class="sponsor" src="<?php bloginfo('template_directory') ?>/img/build/bbd.png" alt="bouwkunde bedrijvendagen" title="bouwkunde bedrijvendagen" /></a>
            <a href="http://posad.nl/" title="posad"><img class="sponsor" src="<?php bloginfo('template_directory') ?>/img/build/posad.png" alt="posad logo" title="posad" /></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39812760-1', 'viastedebouw.nl');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>

</body>
</html>
