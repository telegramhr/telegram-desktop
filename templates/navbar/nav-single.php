<nav class="nav-single">
    <div class="container">
        <div class="tg left-action">
            <a href="#top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tg-logo.svg" height="20"/>
            </a>
        </div>
        <div class="article-title">
            <?php the_title(); ?>
            <span class="rcmds"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
        </div>
        <div class="search right-action">
            <?php get_template_part('templates/layout/share-box'); ?>
        </div>

    </div>
</nav>