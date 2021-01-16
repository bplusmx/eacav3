<?php
/**
 * Main framework file
 *
 * @package acapulco
 */

global $featured_box_query_args;

include TEMPLATEPATH . '/vendor/tgm-plugin-activation/class-tgm-plugin-activation.php';

require_once TEMPLATEPATH . '/vendor/titan-framework/titan-framework-embedder.php';
require_once TEMPLATEPATH . '/lib/theme-options.php';

include TEMPLATEPATH . '/lib/required-plugins.php';

include TEMPLATEPATH . '/framework/sidebars.php';
include TEMPLATEPATH . '/framework/bootstrap/tabs.php';

function aca_eventos_template_single($content) {
	global $post;

	if ( 'eaca_events' === get_post_type() ) {
		ob_start();

		$location = get_field('venue_map');
		?>
		<div class="row">
			<a name="ubicacion"></a>
			<a name="contacto"></a>

			<div class="col-sm-12">
				<div class="mapa">
					<?php if (!empty($location)): ?>
					<div id="map-dep"></div>
					<?php endif ?>
				</div>
			</div>
		</div>
		<?php if ( ! empty($location) ): ?>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAO1SSsKDt-KY91aRpfMupbh0TqN2UF-D8&sensor=false"></script>
		<script type="text/javascript">
		(function ($)
		{
			function map_load()
			{
				var lat = <?php echo $location['lat']; ?>;
				var lng = <?php echo $location['lng']; ?>;

				// coordinates to latLng
				var latlng = new google.maps.LatLng(lat, lng);

				// map Options
				var myOptions = {
					zoom: 17,
					center: latlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};

				//draw a map
				var map = new google.maps.Map(document.getElementById("map-dep"), myOptions);

				var contentString = '<h3><a href="<?php echo $dep_title ?>"></a><?php echo esc_attr( $dep_title ) ?></h3>';

				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});

				var marker = new google.maps.Marker({
					position: latlng,
					map: map,
					title: '<?php echo esc_attr( get_the_title() ) ?>'
				});

				marker.addListener('click', function()
				{
					infowindow.open(map, marker);
				});

				infowindow.open(map, marker);
			}

			$(document).ready(function()
			{
				<?php if ( ! empty( $location ) ): ?>
				// call the function
				map_load();
				<?php endif; ?>
			});
		})(jQuery);
		</script>
		<?php endif ?>
		<?php

		$mapa = ob_get_clean();
	}

	return $content . $mapa;
}

add_action( 'the_content', 'aca_eventos_template_single', 10 );

function aca_extra_headers() {
	include TEMPLATEPATH . '/partials/extra-headers.php';
}

add_action( 'wp_head', 'aca_extra_headers' );


function aca_body_begin() {
	/*
	?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=115053295216421";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php
	*/
	include TEMPLATEPATH . '/partials/navbar-top.php';
}

add_action( 'aca_wp_body_begin', 'aca_body_begin' );

/**
 * Muestra el menú por defecto
 *
 * @param string $class Nombre de la clase.
 */
function aca_the_menu_default( $class = '' ) {
	?>
	<ul class="nav nav-pills pull-right <?php echo esc_attr( $class ) ?>">
		<li><a href="<?php echo esc_attr( admin_url( 'nav-menus.php' ) ) ?>">1. Defina un menú</a></li>
		<li><a href="<?php echo esc_attr( admin_url( 'nav-menus.php?action=locations' ) ) ?>">2. Asigne a esta sección (menú superior)</a></li>
	</ul>
	<?php
}

/**
 * Muestra el menú primario
 */
function aca_the_menu_primary() {
	$menu_args = array(
		'theme_location' 	=> 'primary',
		'menu_class' 		=> 'nav nav-pills pull-right',
		'fallback_cb' 		=> 'eaca_the_menu_default',
		'sort_column' 		=> 'menu_order',
		'menu_class' 		=> 'nav nav-pills pull-right',
		'echo' 				=> 0,
	);

	echo wp_nav_menu( $menu_args );
}

add_action( 'after_setup_theme', 'eaca_setup' );

if ( ! function_exists( 'eaca_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function eaca_setup() {

	add_image_size( 'diminuta', 48, 32, true );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'           => __( 'Main Menu', 'acapulco' ),
		'menuglobaltop'     => __( 'Menu superior', 'acapulco' ),
		'menuglobalfooter'  => __( 'Menu pie de página', 'acapulco' ),
	));

	// load custom walker menu class file
	// require 'includes/class-bootstrapwp_walker_nav_menu.php';. WPCS: ok.
}
endif; // end eaca_setup.

add_action( 'wp_enqueue_scripts', 'eaca_enqueue_scripts' );

/**
 * Agrega scripts .
 * Elimina el jQuery que viene con WordPress
 *
 * @see wp_print_scripts
 */
function eaca_enqueue_scripts() {
	global $wp_customize;

	// Old code.
	$base_url = get_template_directory_uri();

	//wp_enqueue_style( 'yamm3', $base_url . '/components/yamm3/yamm/yamm.css' );

	wp_enqueue_style( 'font-nunito', 'http://fonts.googleapis.com/css?family=Nunito:400,700' );

	wp_enqueue_style( 'font-dancing-script', '//fonts.googleapis.com/css?family=Dancing+Script:400,700' );

	//wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );
	//wp_enqueue_style( 'flat-ui', $base_url . '/components/flat-ui-official/css/flat-ui.css' );

	//wp_enqueue_style( 'bootstrap-vertical-tabs', $base_url . '/components/bootstrap-vertical-tabs/bootstrap.vertical-tabs.min.css' );
	//wp_enqueue_style( 'resbox', $base_url . '/ResBox/CSS/ResBox.css' );

	// Estilos de la plantilla actual.
	wp_enqueue_style( 'eacav3-all', $base_url . '/css/base.css' );

	// Remueve jQuery en el sitio público.
	if ( ! is_admin() ) {
		if ( ! is_customize_preview() ) {
			wp_deregister_script( 'jquery' );
			wp_register_script( 'jquery', '', false, '' );
		}

		wp_enqueue_script( 'jquery', $base_url . '/js/jquery.js' );
	}

	wp_enqueue_script( 'acapulco', $base_url . '/js/all.js', array(), 'v3.3.5', true );

	/*
	wp_enqueue_script( 'resbox', $base_url . '/ResBox/JS/Default_ESPX.js', array( 'jquery' ) );
	wp_enqueue_script( 'resbox-calendar', $base_url . '/ResBox/JS/Calendar_ESPX.js', array( 'resbox' ) );
	wp_enqueue_script( 'resbox-fechas', $base_url . '/ResBox/JS/fechas_ESPX.js', array( 'resbox-calendar' ) );
	wp_enqueue_script( 'resbox-default', $base_url . '/ResBox/JS/DefaultX.js', array( 'resbox-fechas' ) );
	*/
	// New code.

	wp_enqueue_script( 'eaca-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

}

/**
 * Muestra Nav Pills de Bootstrap de una lista de categorias
 *
 * @param array|object $term_list Lista de categorías.
 * @param array        $options Opciones de personalización.
 *
 * @see eaca_nav_list_terms Para opciones en $options
 */
function eaca_nav_pills_terms( $term_list, $options) {
	$required_class = 'nav nav-pills';

	if ( ! empty( $options['class'] )) {
		$options['class'] = $required_class . ' ' . $options['class'];
	}

	eaca_nav_list_terms( $term_list, $options );
}

if ( ! function_exists( 'the_feature_thumb' )) {
	/**
	 * Muestra la foto de un post
	 *
	 * @param int    $id     Id del post.
	 * @param string $size   Dimensiones de la imagen.
	 * @param bool   $echo   Mostrar o retornar.
	 *
	 * @see eaca_nav_list_terms Para opciones en $options
	 */
	function the_feature_thumb( $id, $size = 'thumbnail', $echo = true) {
		global $wpdb;

		// Si ya tiene un post thumbnail.
		if ( has_post_thumbnail( $id ) ) {
			$res = get_the_post_thumbnail( $id, $size );
		} else {
			// Busquemos una imagen adjunta al post.
			$sql = $wpdb->prepare( "SELECT ID FROM %s
				WHERE post_parent = %d AND post_status = 'inherit'
				AND post_type = 'attachment' ORDER BY menu_order ASC", $wpdb->posts, $id );

			$rs = $wpdb->get_results( $sql ); // WPCS: db call ok, cache ok, unprepared SQL ok.

			if (empty( $size )) {
				$size = 'thumbnail';
				}

			$res = wp_get_attachment_image( $rs[0]->ID, $size );
		}

		if ($echo) {
			echo $res;
		}

		return $res;
	}
} // End if().
