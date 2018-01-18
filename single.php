<?php
get_header();

// The Loop
if( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>

<div class="single-page container">

    <div class="single-head">
        <h3 class="overtitle"><?php the_category(); ?></h3>
        <h1 class="title">
            <?php the_title(); ?>
        </h1>
        <h2 class="subtitle">
            <?php
            echo get_excerpt( get_field('subtitle'), 141 ); ?>
        </h2>
        <div class="article-meta">
            <?php
            foreach (get_coauthors() as $author) { ?>
                <div class="author-block">
                    <div class="author-thumb">
                        <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                            <?php
                            if( coauthors_get_avatar($author) ) {
                                echo coauthors_get_avatar($author, 150);
                            } else {
                                ?>
                                <div class="initials">
                                    <?php
                                    echo $author->first_name[0];
                                    echo $author->last_name[0]; ?>
                                </div>
                                <?php
                            } ?>
                        </a>
                    </div>
                    <span class="author">
                <a href="<?php echo get_author_posts_url( $author->ID, $author->user_login ); ?>">
                    <?php echo $author->display_name; ?>
                </a>
            </span>
                </div>
            <?php } ?>
            </span>
            <span class="time"><?php the_time() ?></span>
            <span class="rcmds"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
            <span class="comms"><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
        </div>
    </div>

    <div class="single-body">
        <!-- Single Content -->
        <div class="single-content">
            <div class="thumb">
                <?php
                // 840x530 px
                the_post_thumbnail('single-v1');
                ?>
                <div class="last-update">
                    ZADNJA IZMJENA:
                    <?php echo date_i18n( get_option(  'date_format' ), get_the_modified_time( 'U' ) ) ?>
                </div>
                <?php
                // The Photographer
                if( telegram_get_photographer() ) { ?>
                    <div class="photographer">
                        Foto: <?php echo telegram_get_photographer() ?>
                    </div>
                    <?php
                }  ?>
            </div>

            <div class="content-container">
                <?php get_template_part('templates/layout/left-share'); ?>
                <div class="the-content">
                    <?php
                    // Article content
                    the_content(); ?>
                    <?php
                    // Tags
                    the_tags('<div class="tags">', ', ', '</div>'); ?>
                </div>

                <div class="ender">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tg-logo-red.svg"/>
                </div>

                <?php // Article bottom sidebar
                dynamic_sidebar('sidebar-single-bottom-1'); ?>

            </div>
        </div>
        <!-- Single Sidebar -->
        <div class="sidebar single-sidebar">
            <div class="sticky-widget">
            <?php dynamic_sidebar('sidebar-single'); ?>
            </div>
        </div>
    </div>
    <div class="navigation"><?php previous_post_link(); ?>    <?php next_post_link(); ?></div>
    <?php
        // Bottom single sidebar - Fullwidth
        dynamic_sidebar('sidebar-single-bottom-2'); ?>

</div>

        <?php
    } // End Loop WHILE
} // End Loop IF

get_footer();