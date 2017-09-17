<article class="article-poster">
    <a href="<?php the_permalink(); ?>">
        <div class="thumb">
            <?php the_post_thumbnail('article-poster'); ?>
        </div>
    </a>
    <div class="titles ">
        <div class="title-block">
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
                <span class="rcmds">
                    <?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka
                </span>
            </div>
        </div>
    </div>
</article>