<article class="article-rainbow-block">
    <div class="thumb">
        <div class="overlay"></div>
        <?php
        // Thumbsize: 280x230 px
        the_post_thumbnail('fourth'); ?>
    </div>
    <div class="titles">
        <div class="article-meta">
            <span class="rcmds">
                <?php echo get_the_category()[0]->name; ?>
            </span>
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

    </div>
</article>