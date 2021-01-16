<div class="featured-img">                            
    <ul>
        <?php while ($items->have_posts()): $items->the_post() ?>
        <li class="col-sm-<?php echo $columns ?>" itemscope itemtype="http://schema.org/GovernmentService">
            <article itemscope itemtype="http://schema.org/NewsArticle">
                <div class="col-sm-4">
                    <img itemprop="screenshot" src="holder.js/120x90" class="img-responsive" alt="<?php the_title() ?>" />
                </div>
                <div class="col-sm-8">
                    <h4><a itemprop="url" href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                    <p itemprop="description">
                        <?php the_excerpt() ?>
                    </p>
                </div>
            </article>
        </li>
        <?php endwhile ?>
    </ul>
</div>