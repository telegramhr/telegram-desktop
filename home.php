<?php
get_header(); ?>

<div class="home-top-container">
    <?php
    // WIDGET: Top vijesti
    // 5 top vijesti
    the_widget('TG_Top_Vijesti'); ?>

    <div class="zones container">
        <?php
        the_widget('Telegram_Banner_Widget', array('size' => 'billboard1')); ?>
        <div class="wallpapers">
            <?php
            // Wallpapers
            the_widget('Telegram_Banner_Widget', array('size' => 'wallpaper-left'));
            the_widget('Telegram_Banner_Widget', array('size' => 'wallpaper-right')); ?>
        </div>
    </div>
    <?php
    // Get megahead
    get_template_part('templates/layout/megahead');
    ?>

</div>

<div class="section-feed section-feed-1">
    <div class="container feed-container">
        <div class="col col-1 feed">
            <?php
            $args      = array(
                'posts_per_page' => 7,
                'post_status'    => 'publish'
            );
            //$articles  = new WP_Query( $args );
            $articles = z_get_zone_query('feed', array('posts_per_page' => 7));
            if ( $articles->have_posts() ) {
                while ( $articles->have_posts() ) {
                    $articles->the_post();

                    if( $articles->current_post >= 0 && $articles->current_post < 3 ) {
                        get_template_part( 'templates/articles/article-1' );
                    } else {
                        get_template_part( 'templates/articles/article-2' );
                    }
                }
            }
            ?>
        </div>
        <div class="col col-2 midbar">
            <?php
            dynamic_sidebar('home_mid_1'); ?>
        </div>
        <div class="col col-3 sidebar">
            <div class="right-bg"></div>
            <?php
            dynamic_sidebar('home_sidebar_1'); ?>
        </div>
    </div>
</div>

<?php
// GET MEGABREAK
get_template_part('templates/layout/megabreak');
get_template_part('templates/layout/megabillboard');
?>

    <div class="section-feed section-feed-2">
        <div class="container feed-container">
            <div class="col col-1 feed">
                <?php
                $args      = array(
                    'posts_per_page' => 7,
                    'post_status'    => 'publish',
                    'offset'        => 7
                );
                //$articles  = new WP_Query( $args );
                $articles = z_get_zone_query( 'feed', array('posts_per_page' => 7, 'offset' => 7) );
                if ( $articles->have_posts() ) {
                    while ( $articles->have_posts() ) {
                        $articles->the_post();

                        if( $articles->current_post >= 0 && $articles->current_post < 2 ) {
                            get_template_part( 'templates/articles/article-1' );
                        } else {
                            get_template_part( 'templates/articles/article-2' );
                        }
                    }
                }
                ?>
            </div>
            <div class="col col-2 midbar">
                <?php
                dynamic_sidebar('home_mid_2'); ?>
            </div>
            <div class="col col-3 sidebar">
                <div class="right-bg"></div>
                <?php
                dynamic_sidebar('home_sidebar_2'); ?>
            </div>
        </div>
    </div>

    <!-- MEGABREAK -->
    <div class="megabreak-container megabreak-2">

        <?php
        telegram_load_megabreak('break', 2);
         ?>

    </div>

<?php
get_footer();