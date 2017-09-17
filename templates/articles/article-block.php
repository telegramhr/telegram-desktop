<article class="article-block">
    <div class="titles">
        <?php
        $cat = get_the_category(); ?>
        <h1 class="title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <div class="article-meta">
            <span class="rcmds"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
        </div>
    </div>
</article>