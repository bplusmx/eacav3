<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'aca_create_options' );

/**
 * Initialize Titan & options here
 */
function aca_create_options() {

	$titan = TitanFramework::getInstance( 'acapulco' );

	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */

	$section = $titan->createThemeCustomizerSection( array(
		'name' => 'Font Settings',
		//'panel' => __( 'Site Settings', 'acapulco' ),
		'desc' => __( 'Font Settings for the site', 'acapulco' ),
		'id' => 'acapulco_theme_layout_options'
	) );

	$section->createOption( array(
		'name' => __( 'Footer text', 'acapulco'),
		'id' => 'footer_text',
		'type' => 'text',
		'desc' => __( 'Footer text', 'acapulco')
	) );

	$section2 = $titan->createThemeCustomizerSection( array(
		// 'name' => __( 'Font Settings', 'acapulco' ),
		// 'panel' => __( 'Site Settings', 'acapulco' ),
		// 'desc' => __( 'Font Settings for the site', 'acapulco' ),
		'id' => 'acapulco_theme_footer_options'
	) );

	$section2->createOption( array(
	    'name' 			=> 'Background Color',
	    'id' 			=> 'my_background_color',
	    'type' 			=> 'color',
	    'default' 		=> '#ffffff',
	    'livepreview' 	=> '$(".site-footer").css("backgroundColor", value);'
	) );

	$section2->createOption( array(
		'name' => __( 'Body Content Font', 'acapulco'),
		'id' => 'body_font',
		'type' => 'font',
		'desc' => __( 'Select a style', 'acapulco'),
		'show_line_height' => true,
		'show_letter_spacing' => false,
		'show_text_transform' => false,
		'show_font_variant' => false,
		'show_text_shadow' => false,
		'show_font_size' => true,
		'fonts' => array( 'Lato' ),
		'default' => array(
			'font-family' => 'Open Sans',
			'line-height' => '1em',
			'font-weight' => '300',
			'color' => '#444444',
		),
		'css' => '.site-content { value }'
	) );

	$section2->createOption( array(
		'name' => __( 'Footer text', 'acapulco'),
		'id' => 'footer_text2',
		'type' => 'text',
		'desc' => __( 'Footer text', 'acapulco')
	) );

	/**
	 * Create an admin panel & tabs
	 * You should put options here that do not change the look of your theme
	 */

	$admin_panel = $titan->createAdminPanel( array(
		'name'			=> __( 'Settings', 'acapulco' ),
		'title'			=> __( 'Site Options', 'acapulco' ),
		'id'			=> 'acapulco-options',
		'icon'			=> 'dashicons-art',
		'capability'	=> 'administrator',
	) );

	/**
	 * Tabs
	 */

	$general_tab = $admin_panel->createTab( array(
		'name'	=> __( 'General', 'acapulco' ),
		'id'	=> 'general_options'
	) );

	$footer_tab = $admin_panel->createTab( array(
		'name'	=> __( 'Footer', 'acapulco' ),
		'id'	=> 'footer_options',
	));

	$fonts_tab = $admin_panel->createTab( array(
		'name'	=> __( 'Fonts', 'acapulco' ),
		'id'	=> 'fonts_options',
	));

	$headers_tab = $admin_panel->createTab( array(
		'name'	=> __( 'Headers', 'acapulco' ),
		'id'	=> 'header_options',
	));

	/**
	 * Opciones
	 */

	$general_tab->createOption( array(
		'name'		=> __( 'Logo', 'acapulco' ),
		'id' 		=> 'admin_login_logo',
		'type' 		=> 'upload',
		'desc' 		=> __( 'Image to be displayed on login page. Maximum width should be under 450pixels.', 'acapulco' ),
	) );

	$general_tab->createOption( array(
		'name' 		=> __( 'Set Logo size (%)', 'acapulco' ),
		'id' 		=> 'admin_logo_size_percent',
		'type'		=> 'number',
		'default' 	=> '100',
		'max' 		=> '100',
	) );

	$general_tab->createOption( array(
		'type' => 'save',
	) );

	/**
	 * Font options
	 */

	$fonts_tab->createOption( array(
		'name' => __( 'Font options', 'acapulco' ),
		'type' => 'heading',
	) );

	$fonts_tab->createOption( array(
		'name' => __( 'Body Content Font', 'acapulco'),
		'id' => 'admin_body_font',
		'type' => 'font',
		'desc' => __( 'Select a style', 'acapulco'),
		'show_line_height' => true,
		'show_letter_spacing' => false,
		'show_text_transform' => false,
		'show_font_variant' => false,
		'show_text_shadow' => false,
		'show_font_size' => true,
		'fonts' => array( 'Lato' ),
		'default' => array(
			'font-family' => 'Open Sans',
			'line-height' => '1em',
			'font-weight' => '300',
			'color' => '#444444',
		)
	) );

	$fonts_tab->createOption( array(
		'name' => __('Heading H1', 'acapulco'),
		'id' => 'admin_h1_font',
		'type' => 'font',
		'desc' => __('Select a style', 'acapulco'),
		'show_preview' => true,
		'show_line_height' => true,
		'show_letter_spacing' => true,
		'show_font_variant' => true,
		'show_font_style' => true,
		'show_text_shadow' => true,
		'fonts' => array( 'Lato' ),
		'default' => array(
			'font-family' => 'Droid Sans',
			'font-size' => '24px',
			'color' => '#333333',
			'line-height' => '1em',
			'font-weight' => '300',
		)
	) );

	$fonts_tab->createOption( array(
		'name' => __('Heading H2', 'acapulco'),
		'id' => 'admin_h2_font',
		'type' => 'font',
		'desc' => __('Select a style', 'acapulco'),
		'show_line_height' => false,
		'show_letter_spacing' => false,
		'show_font_variant' => false,
		'show_font_style' => false,
		'show_text_shadow' => false,
		'default' => array(
			'font-family' => 'Droid Sans',
			'font-size' => '20px',
			'color' => '#333333',
			'line-height' => '1em',
			'font-weight' => '300',
		)
	) );

	$fonts_tab->createOption( array(
		'name' => __('Heading H3', 'acapulco'),
		'id' => 'admin_h3_font',
		'type' => 'font',
		'desc' => __('Select a style', 'acapulco'),
		'show_line_height' => false,
		'show_letter_spacing' => false,
		'show_font_variant' => false,
		'show_font_style' => false,
		'show_text_shadow' => false,
		'default' => array(
			'font-family' => 'Droid Sans',
			'font-size' => '18px',
			'color' => '#333333',
			'line-height' => '1em',
			'font-weight' => '300',
		)
	) );

	$fonts_tab->createOption( array(
		'name' => __('Heading H4', 'acapulco'),
		'id' => 'admin_h4_font',
		'type' => 'font',
		'desc' => __('Select a style', 'acapulco'),
		'show_line_height' => false,
		'show_letter_spacing' => false,
		'show_font_variant' => false,
		'show_font_style' => false,
		'show_text_shadow' => false,
		'default' => array(
			'font-family' => 'Droid Sans',
			'font-size' => '16px',
			'color' => '#333333',
			'line-height' => '1em',
			'font-weight' => '300',
		)
	) );
	$fonts_tab->createOption( array(
		'name' => __('Heading H5', 'acapulco'),
		'id' => 'admin_h5_font',
		'type' => 'font',
		'desc' => __('Select a style', 'acapulco'),
		'show_line_height' => false,
		'show_letter_spacing' => false,
		'show_font_variant' => false,
		'show_font_style' => false,
		'show_text_shadow' => false,
		'default' => array(
			'font-family' => 'Droid Sans',
			'font-size' => '14px',
			'color' => '#333333',
			'line-height' => '1em',
			'font-weight' => '300',
		)
	) );
	$fonts_tab->createOption( array(
		'name' => __('Heading H6', 'acapulco'),
		'id' => 'admin_h6_font',
		'type' => 'font',
		'desc' => __('Select a style', 'acapulco'),
		'show_line_height' => false,
		'show_letter_spacing' => false,
		'show_font_variant' => false,
		'show_font_style' => false,
		'show_text_shadow' => false,
		'default' => array(
			'font-family' => 'Droid Sans',
			'font-size' => '14px',
			'color' => '#333333',
			'line-height' => '1em',
			'font-weight' => '300',
		)
	) );
	$fonts_tab->createOption( array(
		'name' => __('Menu Font', 'acapulco'),
		'id' => 'admin_menu_font',
		'type' => 'font',
		'desc' => __('Select a style', 'acapulco'),
		'show_line_height' => false,
		'show_letter_spacing' => false,
		'show_font_variant' => false,
		'show_text_shadow' => false,
		'show_font_size' => false,
		'show_color' => false,
		'default' => array(
			'font-family' => 'Droid Sans',
			'font-size' => '13px',
			'line-height' => '1em',
			'font-weight' => '300',
		)
	) );

	$fonts_tab->createOption( array(
		'name' => __('Save', 'acapulco'),
		'type' => 'save',
	) );

	/**
	 * Header options
	 */

	$headers_tab->createOption( array(
		'name'		=> __( 'Aditional Javascript', 'acapulco' ),
		'id' 		=> 'custom_js',
		'type'		=> 'code',
		'desc'		=> __( 'Write aditional Javascript code and it will be added on the site. No need to add the <code>script</code> tag', 'acapulco' ),
		'lang'		=> 'javascript',
	) );

	$headers_tab->createOption( array(
		'name'		=> __( 'Aditional styles', 'acapulco' ),
		'id' 		=> 'custom_css',
		'type'		=> 'code',
		'desc'		=> __( 'Write aditional styles and it will be added on the site header. No need to add the <code>style</code> tag', 'acapulco' ),
		'lang'		=> 'css',
	) );

	$headers_tab->createOption( array(
		'name' => __('Save', 'acapulco'),
		'type' => 'save',
	) );

}
