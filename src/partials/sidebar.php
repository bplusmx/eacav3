<?php
/**
 * Barra lateral
 *
 * @package acapulco
 */

?>
<?php
global $post;
?>
<?php if ( 'eaca_hoteles' === $post->post_type ) : ?>
	<?php include 'partials/form-dispo.php' ?>
<?php endif ?>

			<div id="sidebar" role="complementary">

	<?php if ( is_single() ) : ?>
	<?php if ( 'eaca_events' === $post->post_type ) : ?>
	<?php get_template_part( 'partials/eventos-sidebar-info' ) ?>
	<?php endif ?>
<?php endif ?>


		<?php if ( function_exists( 'dynamic_sidebar' ) ) { dynamic_sidebar();} ?>

		<?php if ( ! is_home() ) : ?>

	<?php $recomendados = new WP_Query( array(
		'post__in' => get_option( 'sticky_posts' ),
		'showposts' => 5,
	) ) ?>
	<div style="clear: both;"></div>
	<h3 style="color: #E26D05; font-family: Arial;">Recomendados en Acapulco</h3>
	<ul class="related_post sidebar">
	<?php while ( $recomendados->have_posts() ) : $recomendados->the_post(); ?>
		<li><a href="<?php the_permalink() ?>"><?php the_feature_thumb( $post->ID, 'thumbnail' ); ?></a> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
	<?php endwhile; ?>
	</ul>

	<div style="clear: both;"></div>
<?php endif // End if(). ?>
</div>
