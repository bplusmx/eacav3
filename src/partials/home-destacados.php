<?php
$items = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'destacados',
    'posts_per_page' => 4
));
?>

<?php if ($items->have_posts()) : ?>
<div class="notas-destacadas">

	<h2>Artículos destacados</h2>

    <div class="row">
        <div class="col-sm-12">
        <?php while ($items->have_posts()): $items->the_post() ?>
        <div class="col-sm-3 col-md-3">
            <div class="post">
                <div class="post-img-content">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?></a>
                    <span class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></span>
                </div>
            </div>
        </div>
        <?php endwhile ?>
        </div>
        <?php /*
        <div class="col-sm-4">
            <h3></h3>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- E-Acapulco Featured Articles -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:250px;height:250px"
                 data-ad-client="ca-pub-2625295105356550"
                 data-ad-slot="1685278242"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>*/ ?>
    </div>
</div>
<?php endif ?>
