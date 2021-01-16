<?php
if (intval(featured_box_query_limit) < 1) {
    $featured_box_query_limit = 5;
}

$featured_box_query_args['posts_per_page'] = $featured_box_query_limit;

$featured_box_posts = new WP_Query($featured_box_query_args);

$featured_box_count = 0;
?>

<?php if ($featured_box_posts->have_posts()): ?>
<div class="featured-list layout-1x4">
    <ul>
        <?php while ($featured_box_posts->have_posts()): $featured_box_posts->the_post(); $featured_box_count++; ?>
      <li>
          <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
          <span>
          <?php 
          if (get_post_type() == 'tramite') {
              echo get_post_meta(get_the_ID(), '_tmt_descr', true);
          } else {
              echo wp_trim_words(get_the_excerpt(), 10); 
          }          
          ?>
          </span>
      </li>
<?php
if ($featured_box_count >= $featured_box_query_limit) {
    break;
}
?>      
<?php endwhile ?>
    </ul>
</div>
<?php else: ?>
No se encontró información con sus criterios
<?php endif ?>
