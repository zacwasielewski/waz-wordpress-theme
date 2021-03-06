<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Waz
 */
?>

	</div><!-- #content -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- #site-navigation -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
		  <p>Copyright 2013 Zac Wasielewski</p>

			<?php do_action( 'waz_credits' ); ?>
		  <!--
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'waz' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'waz' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'waz' ), 'Waz', '<a href="http://wasielewski.org" rel="designer">Zac Wasielewski</a>' ); ?>
			-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>