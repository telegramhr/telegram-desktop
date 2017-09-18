
<article class="article-sidebar">
    <div class="thumb">
        <a href="<?php the_permalink() ?>">
            <?php
            get_template_part('templates/articles/article-badge');
            // Main Featured image:
            if( has_post_thumbnail() ) {
                the_post_thumbnail('sidebar');
            } else {
                echo '<img src="'.get_template_directory_uri().'/assets/img/dummy/article-sidebar.png"/>';
            } ?>
        </a>
    </div>
    <div class="titles">
        <h1 class="title">
            <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <div class="article-meta">
            <span><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
            <span class="rcmds"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
        </div>
    </div>

</article>