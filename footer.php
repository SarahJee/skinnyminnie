<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skinny_Minnie
 */

?>

	</div><!-- #content -->
	

	<?php get_sidebar ( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<nav class="social-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'social') ); ?>
		</nav><!-- .social-menu -->

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'skinnyminnie' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'skinnyminnie' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'skinnyminnie' ), 'skinnyminnie', '<a href="https://automattic.com/" rel="designer">Sarah Jee Watson</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
