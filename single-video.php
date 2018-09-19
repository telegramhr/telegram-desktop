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
                        <div class="author-thumb">
                            <?php echo coauthors_get_avatar($author, 150); ?>
                        </div>
                    <?php } ?>
                    <span class="author">
                <?php
                // Get authors
                $authors = get_coauthors();
                foreach($authors as $author) {
                    echo coauthors_posts_links_single($author);
                }
                ?>
            </span>
                    <span class="time"><?php the_time() ?></span>
                    <span class="rcmds"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
                    <span class="comms"><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
                </div>

                <div class="video-head">
                    <?php echo apply_filters('widget_text_content', trim(get_field('video'))); ?>
                </div>

            </div>

            <div class="single-body">
                <!-- Single Content -->
                <div class="single-content">
                    <div class="thumb">
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
                    <?php dynamic_sidebar('sidebar-single'); ?>
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