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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<?php
		/**
		 * acapulco_before_main_content hook.
		 *
		 * @hooked acapulco_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked acapulco_breadcrumb - 20
		 */
		do_action( 'acapulco_before_main_content' );
	?>

		<?php if ( apply_filters( 'acapulco_show_page_title', true ) ) : ?>

			<h1 class="page-title"><?php acapulco_page_title(); ?></h1>

		<?php endif; ?>

		<?php
			/**
			 * acapulco_archive_description hook.
			 *
			 * @hooked acapulco_taxonomy_archive_description - 10
			 * @hooked acapulco_product_archive_description - 10
			 */
			do_action( 'acapulco_archive_description' );
		?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * acapulco_before_shop_loop hook.
				 *
				 * @hooked acapulco_result_count - 20
				 * @hooked acapulco_catalog_ordering - 30
				 */
				do_action( 'acapulco_before_shop_loop' );
			?>

			<?php acapulco_product_loop_start(); ?>

				<?php acapulco_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php acapulco_product_loop_end(); ?>

			<?php
				/**
				 * acapulco_after_shop_loop hook.
				 *
				 * @hooked acapulco_pagination - 10
				 */
				do_action( 'acapulco_after_shop_loop' );
			?>

		<?php elseif ( ! acapulco_product_subcategories( array(
				'before' => acapulco_product_loop_start( false ),
				'after' => acapulco_product_loop_end( false ) 
			) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * acapulco_after_main_content hook.
		 *
		 * @hooked acapulco_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'acapulco_after_main_content' );
	?>

	<?php
		/**
		 * acapulco_sidebar hook.
		 *
		 * @hooked acapulco_get_sidebar - 10
		 */
		do_action( 'acapulco_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>
