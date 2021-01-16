<?php
if (intval(featured_box_query_limit) < 1) {
    $featured_box_query_limit = 3;
}

$featured_box_query_args['posts_per_page'] = $featured_box_query_limit;

$featured_box_posts = new WP_Query($featured_box_query_args);

$featured_box_count = 0;
?>

<?php if ($featured_box_posts->have_posts()): ?>
<?php while ($featured_box_posts->have_posts()): $featured_box_posts->the_post(); $featured_box_count++; ?>
<?php if ($featured_box_count <= 1): ?>
<div class="featured-img layout-1x2">                            
    <div class="col-sm-12 featured">
        <?php the_post_thumbnail('thumbnail') ?>
        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
    </div>
</div>
<div class="featured-list layout-1x2">
<?php continue; endif ?>  
    <article>
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail') ?></a>
        <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
        <?php echo wp_trim_words(get_the_excerpt(), 10) ?>
    </article>
<?php
if ($featured_box_count >= $featured_box_query_limit) {
    break;
}
?>      
<?php endwhile ?>
</div>
<?php else: ?>
No se encontró información con sus criterios
<?php endif ?>