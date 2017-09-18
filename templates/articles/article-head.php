<article class="article-head">
    <?php
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'article-head' ); ?>
    <div class="thumb" style="background-image: url(<?php echo $thumb['0']; ?>);">
        <div class="overlay"></div>
        <?php
        // Get Video icon
        if( $post -> post_type == 'video' ) { ?>
            <div class="play-button"></div>
        <?php } ?>
    </div>
    <div class="article-content">
        <div class="container">

            <div class="titles">
                <?php
                // Author / Time / Recommendations / Comments
                get_template_part('templates/articles/article-meta'); ?>
                <h1 class="title">
                    <?php
                    // Get Sticker Badge
                    if( get_field('sticker' ) ) { ?>
                        <div class="sticker">
                            <h2>
                                <?php echo get_field('sticker'); ?>
                                <span class="decail"></span>
                            </h2>
                        </div>
                    <?php } ?>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a>
                </h1>
            </div>
        </div>
    </div>
</article>
