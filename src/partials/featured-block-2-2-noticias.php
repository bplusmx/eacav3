<?php 
$max_items = $items_per_row = 4;

if ($max_items > 2) {
    $items_per_row = ceil($max_items / 2);
}

$columns = 12 / $items_per_row;

$items = new WP_Query('category_name=noticias&posts_per_page=' . $max_items);

include 'featured-block-2-2.php';
