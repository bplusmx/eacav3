<?php

$items = new WP_Query(array(
    'posts_per_page' => 5,
    'meta_query' => array(
        array('key' => '_thumbnail_id')
    )
));

$i = 0;
$total = $items->post_count;

if ($items->have_posts()): 
?>
<div id="myCarousel" class="carousel slide visible-sm visible-md visible-lg">
  <!-- Indicators -->
  <ol class="carousel-indicators">
      <?php for ($j = 0; $j < $total; $j++): ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $j ?>" class="<?php echo $j == 0 ? 'active' : '' ?>"></li>
    <?php endfor ?>
  </ol>        
  <div class="carousel-inner">
      <?php while ($items->have_posts()): $items->the_post(); $i++; ?>
      <div class="item <?php echo $i == 1 ? 'active' : '' ?>" itemscope="" itemtype="http://schema.org/NewsArticle">      
      <?php if (has_post_thumbnail()): ?>
        <?php
        $foto_id = get_post_thumbnail_id();
        
        $src = wp_get_attachment_image_src($foto_id, 'large');
        ?>
          <img src="<?php echo $src[0] ?>" alt="" itemprop="thumbnailUrl">
      <?php endif ?>
      <div class="container">
        <div class="carousel-caption">
            <h1 itemprop="headLine">
                <a itemprop="url" href="<?php the_permalink() ?>">
                    <?php the_title() ?>
                </a>
            </h1>
        </div>
      </div>
    </div>
      <?php  endwhile ?>

  </div>
  
</div><!-- /.carousel -->

<?php endif ?>