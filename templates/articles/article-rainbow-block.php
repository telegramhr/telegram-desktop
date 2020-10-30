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
                <?php
                if (get_post_meta( get_the_ID(), 'nadnaslov', true ) ) {
	                the_field('nadnaslov');
                }
                else {
                    echo get_the_category()[0]->name;
                } ?>
            </span>
        </div>
        <h1 class="title">
                <a href="<?php the_permalink(); ?>">
                <?php
                if ( get_post_meta( get_the_ID(), 'short_title', true )  ) {
                    echo get_post_meta( get_the_ID(), 'short_title', true ) ;
                }
                else {
                    the_title();
                } ?>
            </a>
        </h1>

    </div>
</article>