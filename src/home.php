<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package acapulco
 */

get_header(); ?>

<div id="home-destacados">
	<?php get_template_part( 'partials/site-destacados' ) ?>
</div>

<?php
$items = new WP_Query(array(
	'post_type' => 'post',
	'category_name' => 'destacados',
	'posts_per_page' => 4,
));
?>

<?php if ($items->have_posts()) : ?>
<div class="notas-destacadas">
	<h2>Artículos destacados</h2>
	<div class="row">
		<div class="col-sm-12">
		<?php while ($items->have_posts()) : $items->the_post() ?>
		<div class="col-sm-3 col-md-3">
			<div class="post">
				<div class="post-img-content" title="<?php echo $item->title ?>">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array(
	'class' => 'img-responsive',
) ); ?></a>
					<span class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></span>
				</div>
			</div>
		</div>
		<?php endwhile ?>
		</div>
	</div>
</div>
<?php endif ?>


<?php
$items = new WP_Query(array(
	'post_type' => 'eaca_venues',
	'category_name' => 'destacados',
	'posts_per_page' => 4,
));
?>

<?php if ($items->have_posts()) : ?>
<div class="notas-destacadas">
	<div class="row">
		<div class="col-sm-8">
			<h2><i class="fa fa-map-marker"></i> Lugares para visitar en Acapulco</h2>

		<?php while ($items->have_posts()) : $items->the_post() ?>
		<div class="col-sm-3 col-md-3">
			<div class="post">
				<div class="post-img-content">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array(
	'class' => 'img-responsive',
) ); ?></a>
					<span class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></span>
				</div>
			</div>
		</div>
		<?php endwhile ?>
		</div>
		<div class="col-sm-4">
			<h2>Videos de Acapulco</h2>
			<iframe width="320" height="180" src="https://www.youtube-nocookie.com/embed/Aq1SFpvngzY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<?php endif ?>

	<div class="container page-wrapper">
		<?php // get_template_part('partials/home-new-content') ?>
	</div>

<?php get_footer() ?>
