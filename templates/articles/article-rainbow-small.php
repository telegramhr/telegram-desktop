<article class="article-rainbow-small">
    <div class="thumb">
        <div class="overlay"></div>
        <?php
        // Thumbsize: 190x120 px
        the_post_thumbnail('article-rainbow-small'); ?>
    </div>
    <div class="titles">
        <h1 class="title">
            <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a>
        </h1>
        <div class="article-meta">
            <span class="rcmds">
                <?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka
            </span>
        </div>
    </div>
</article>