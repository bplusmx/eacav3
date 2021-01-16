<?php
/**
 * Sidebar for theme
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aca_widgets_init()
{
	$sidebars = array(
		// Slug 		=> Name
		'pages' 		=> __( 'Sidebar Pages', 'acapulco' ),
		'categories' 	=> __( 'Sidebar Categories', 'acapulco' ),
		'singular'		=> __( 'Sidebar Singular', 'acapulco' ),

		'top'			=> __( 'Sidebar Top', 'acapulco' ),
		'content-1'		=> __( 'Sidebar Content 1', 'acapulco' ),
		'content-2'		=> __( 'Sidebar Content 2', 'acapulco' ),
		'content-3'		=> __( 'Sidebar Content 3', 'acapulco' ),
		'footer'		=> __( 'Sidebar Footer', 'acapulco' ),
	);

	foreach ($sidebars as $slug => $name) {
		register_sidebar( array(
			'name'          => $name,
			'id'            => 'sidebar-' . $slug,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		) );
	}
}

add_action( 'widgets_init', 'aca_widgets_init' );
