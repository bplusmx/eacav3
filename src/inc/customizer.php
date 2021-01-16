<?php
/**
 * acapulco Theme Customizer.
 *
 * @package acapulco
 */

if ( ! function_exists( 'acapulco_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function acapulco_theme_customize_register( $wp_customize ) {
		// Panel
		$wp_customize->add_panel( 'acapulco_panel', array(
			'title' => __( 'Theme settings', 'acapulco' ),
			'description' => __( 'Theme configuration', 'acapulco' )
		) );

		// Theme layout settings.
		$wp_customize->add_section( 'acapulco_theme_layout_options', array(
			'title'  te     => __( 'Theme Layout Settings', 'acapulco' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Container width and sidebar defaults', 'acapulco' ),
			'priority'    => 160,
			'panel'		=> 'acapulco_panel'
		) );

		$wp_customize->add_section( 'acapulco_theme_footer_options', array(
			'title'       => __( 'Footer Settings', 'acapulco' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Footer customization', 'acapulco' ),
			'priority'    => 160,
			'panel'		=> 'acapulco_panel'
		) );

		$wp_customize->add_setting( 'acapulco_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'container_type', array(
			'label'       => __( 'Container Width', 'acapulco' ),
			'description' => __( "Choose between Bootstrap's container and container-fluid", 'acapulco' ),
			'section'     => 'acapulco_theme_layout_options',
			'settings'    => 'acapulco_container_type',
			'type'        => 'select',
			'choices'     => array(
				'container'       => __( 'Fixed width container', 'acapulco' ),
				'container-fluid' => __( 'Full width container', 'acapulco' ),
			),
			'priority'    => '10',
		) ) );

		$wp_customize->add_setting( 'acapulco_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'acapulco_sidebar_position', array(
			'label'       => __( 'Sidebar Positioning', 'acapulco' ),
			'description' => __( "Set sidebar's default position: right, left, both or none. Note: this can be overridden on individual pages.", 'acapulco' ),
			'section'     => 'acapulco_theme_layout_options',
			'settings'    => 'acapulco_sidebar_position',
			'type'        => 'select',
			'choices'     => array(
				'right' => __( 'Right sidebar', 'acapulco' ),
				'left'  => __( 'Left sidebar', 'acapulco' ),
				'both'  => __( 'Left & Right sidebars', 'acapulco' ),
				'none'  => __( 'No sidebar', 'acapulco' ),
			),
			'priority'    => '20',
		) ) );
	}
} // endif function_exists( 'acapulco_theme_customize_register' ).
add_action( 'customize_register', 'acapulco_theme_customize_register' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function acapulco_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'acapulco_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function acapulco_customize_preview_js() {
	wp_enqueue_script( 'acapulco_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'acapulco_customize_preview_js' );
