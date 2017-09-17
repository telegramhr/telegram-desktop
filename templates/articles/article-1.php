<article class="article-1">
    <div class="titles">
        <h1 class="title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <h2 class="subtitle">
            <?php echo get_excerpt( get_field('subtitle'), 141 ); ?>
        </h2>
    </div>
    <div class="thumb">
        <a href="<?php the_permalink(); ?>">
            <?php
            get_template_part('templates/articles/article-badge');
            // Get featured Image
            the_post_thumbnail('article-1'); ?>
        </a>
        <?php
        // Author / Time / Recommendations / Comments
        get_template_part('templates/articles/article-meta'); ?>
    </div>
</article>