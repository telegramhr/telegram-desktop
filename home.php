<?php
get_header(); ?>

<div class="home-top-container">
    <?php
    the_widget('Telegram_Top_Vijesti'); ?>

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

            //g-ove
            $articles = z_get_zone_query('head-article', array('posts_per_page' => 3, 'offset' => 1));
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
            wp_reset_postdata();
            //prepare promo articles
            $pos1 = false;
            $pos2 = false;
            $pos3 = false;

            $pos = get_option( 'telegram_promo_desktop' );
            shuffle( $pos );
            if ( ! empty( $pos ) ) {
	            if ( isset( $pos[0] ) ) {
		            $pos1 = $pos[0];
	            }
	            if ( isset( $pos[1] ) ) {
		            $pos2 = $pos[1];
	            }
	            if ( isset( $pos[2] ) ) {
		            $pos3 = $pos[2];
	            }
            }

            //standard feed
            global $wp_query;
            $current = 0;
            while ( have_posts() ) {
	            the_post();
	            $latest = get_post_meta(get_the_ID(), 'latest_off', true);
	            if ($latest) {
	                continue;
                }
	            if (($current>3 && $current<7) || ($current>10 && $current<14) ) {
		            get_template_part( 'templates/articles/article-1' );
                }
                else {
	                get_template_part( 'templates/articles/article-2' );
                }

                if (3 == $current) {
                    //add first promo close first block, first break
	                if ($pos1) {
		                global $post;
		                $p    = get_post( $pos1 );
		                $post = $p;
		                get_template_part( 'templates/articles/article-2' );
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
                }
                if ($current == 10) {
                    //add second promo, close second block and second break, open third block
	                if ($pos2) {
		                global $post;
		                $p    = get_post( $pos2 );
		                $post = $p;
		                get_template_part( 'templates/articles/article-2' );
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
		                dynamic_sidebar('home-sidebar-2'); ?>
                    </div>
                    </div>
                    </div>

                    <!-- MEGABREAK -->
                    <div class="megabreak-container megabreak-2">

		                <?php
		                telegram_load_megabreak('break', 2);
		                ?>

                    </div>
                    <!-- THIRD BLOCK -->
                    <div class="section-feed section-feed-2">
                    <div class="container feed-container">
                    <div class="col col-1 feed">
                    <?php
                }
                $current++;
	            if ($current>18) {
	                break;
                }
            }
            ?>
    </div>
    <div class="col col-2 midbar">
    </div>
    <div class="col col-3 sidebar">
        <div class="right-bg"></div>
    </div>
    </div>
    </div>

<?php


get_footer();