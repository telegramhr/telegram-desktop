<article class="article-fourth anim">
    <div class="inner">
        <div class="thumb">
            <?php
            get_template_part('templates/articles/article-badge');
            // Get Video icon
            if( $post -> post_type == 'video' ) { ?>
                <div class="play-button"></div>
            <?php }
            // Get featured Image
            the_post_thumbnail('fourth'); ?>
        </div>
        <div class="titles">
            <h1 class="title">
                <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
        </div>
        <?php get_template_part('templates/articles/article-meta'); ?>
    </div>
</article>