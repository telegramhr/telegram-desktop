<article class="article-thin">
    <div class="article-meta">
        <span class="rcmnd-no">
            <?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka
        </span>
    </div>
    <h1 class="title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h1>
    <i class="block-icon"></i>
</article>