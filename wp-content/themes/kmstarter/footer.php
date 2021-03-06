<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package km_starter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!-- #social-navigation -->
		<nav class="social-menu">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'socialMenu',
				) );
			?>
		</nav>

		</footer><!-- #colophon -->

		<!-- I CHOSE to place site-info under footer on purpose :) -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'km_starter' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'km_starter' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'km_starter' ), 'km_starter', 
				'<a href="http://underscores.me/">Karrine Mcfarlane</a>' );
			?>
		</div><!-- .site-info -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
