<?php
/**
 * Bloque de eventos
 *
 * @package acapulco
 */

$max_items = 4;
$items_per_row = 4;

if ( $max_items > 2 ) {
	$items_per_row = ceil( $max_items / 2 );
}

$columns = 12 / $items_per_row;

$items = new WP_Query( 'post_type=eaca_events&posts_per_page=' . $max_items );

include 'featured-block-2-2.php';
