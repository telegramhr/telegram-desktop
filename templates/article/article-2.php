<article class="article-2">
    <header>
        <h1 class="title">
            <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <h2 class="subtitle">
            <?php echo get_excerpt(get_field('subtitle'), 141 ); ?>
        </h2>
    </header>
    <div class="featured-img">
        <?php
        // TG Quick Editor
        if( current_user_can('edit_others_pages') && is_front_page() ) {
            get_template_part('templates/editor/article-editor');
        } ?>

        <?php
        // Main Featured image:
        if( has_post_thumbnail() ) {
            the_post_thumbnail('article-2');
        } else {
            echo '<img src="'.get_template_directory_uri().'/assets/img/dummy/article-2.png"/>';
        } ?>
    </div>
    <div class="article-meta cf">
        <span class="author"><?php the_author(); ?></span>
        <span class="date"><?php the_time(); ?></span>
        <span class="rcmnd-no"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
        <span><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
    </div>
</article>