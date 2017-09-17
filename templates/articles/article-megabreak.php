<article class="article-megabreak">
    <div class="thumb">
        <?php the_post_thumbnail('fullpage'); ?>
    </div>
    <div class="article-content">
        <div class="titles container">
            <?php
            $cat = get_the_category(); ?>
            <div class="article-cat">
                <a href="<?php echo get_category_link( $cat[0]->cat_ID ); ?>">
                    <?php echo $cat[0]->name; ?>
                </a>
            </div>
            <h1 class="title">
                <a href="<?php the_permalink(); ?>">
                    <?php
                    if ( get_field('short_title') ) {
                        echo get_field('short_title');
                    }
                    else {
                        the_title();
                    } ?>
                </a>
            </h1>
            <div class="article-meta">
                piše <span class="author"><?php the_author(); ?></span>
            </div>
            <h2 class="subtitle">
                <?php the_title(); ?>
            </h2>
            <a href="<?php the_permalink(); ?>" class="btn btn-purple">
                Pročitaj više
            </a>
        </div>
    </div>
</article>