<?php
$featured = new WP_Query(array(
    'post_type' => 'any',
    'category_name' => 'destacados',
    'orderby' => 'post_date',
    'order' => 'DESC'
));
?>
<div class="div-wrap" id="features">
    <!-- destacados -->
    <?php if ($featured->have_posts()) : ?>        
    <div id="destacados" class="destacados jcarousel-features">
        <ul>
        <?php $count = 0; while ($featured->have_posts()) : $featured->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('intermediate'); ?></a></li>
            <?php $count++; if ($count >= 5) {break;} ?>
        <?php endwhile ?>
        </ul>

<?php 
$count = 0; $featured->rewind_posts(); 
?>
                
        <div id="features-nav">
        <?php while ($featured->have_posts()) : $featured->the_post(); 
            $class = ($count < 1 ? ' current' : ''); ?>
	        <div rel="<?php echo ($count+1) ?>" id="features-nav<?php echo ($count+1) ?>" class="features-nav-item <?php echo $class ?>">	        
	        <h3><a href="<?php the_permalink(); ?>">
	        <?php
	        if ($count == 0) {
	        	the_title();
	        } else {
	        	$altTitle = get_post_meta($post->ID, 'Titulo_Alterno', true);
                $altTitle = trim($altTitle);
                    
                if (!empty($altTitle)) {
                	echo $altTitle;
                } else {
                	the_title();
                }
	        }
	        ?></a></h3>	        
            <?php the_excerpt() ?>
            </div>
            <?php $count++; if ($count >= 5) {break;} ?>
            <?php endwhile; unset($featured); ?>
        </div>
    </div>
    <?php endif; ?>
</div>