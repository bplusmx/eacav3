<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acapulco
 */

?>

	</div><!-- #content -->

<?php if (0): ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'acapulco' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'acapulco' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'acapulco' ), 'acapulco', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<?php endif ?>

</div><!-- #page -->

<?php get_template_part( 'partials/footer' ) ?>

<?php wp_footer(); ?>

</body>
</html>
