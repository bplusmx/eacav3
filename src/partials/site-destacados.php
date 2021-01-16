<?php
$featured = new WP_Query(array(
    'post_type' => 'any',
    'category_name' => 'destacados',
    'orderby' => 'post_date',
    'order' => 'DESC'
));

$count = 0; 
?>
<?php if ($featured->have_posts()) : ?>
<div class="container site-destacados">
    <?php while ($featured->have_posts()) : $featured->the_post() ?>
    <?php if ($count == 0) : ?>
    <article class="principal">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('intermediate'); ?></a>
        <div class="caption"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
        <div class="info">
            <h4><?php the_title() ?></h4>
            <?php the_excerpt() ?>
            <p><a href="<?php the_permalink() ?>" class="btn btn-inverse">Ver</a></p>
        </div>
    </article>
    <div class="destacadas">
    <?php $count++; continue; endif ?>
        <article>
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            <div class="caption"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
            <div class="info">
                <?php the_excerpt() ?>
                <p><a href="<?php the_permalink() ?>" class="btn btn-inverse">Ver</a> </p>
            </div>
        </article>
    <?php $count++; if ($count > 4) break; endwhile ?>
    </div>
</div>
<?php endif ?>
