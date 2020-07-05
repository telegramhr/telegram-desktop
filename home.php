<?php
get_header(); ?>

<div class="home-top-container">
    <?php
    if (get_current_user_id() === 1) {
	    the_widget('Telegram_Izbori');
    }
    else {
	    the_widget('Telegram_Top_Vijesti');
    }
     ?>

    <div class="zones container">
        <?php
        the_widget('Telegram_Banner_Widget', array('size' => 'telegram_desktop_billboard_v1')); ?>
        <div class="wallpapers">
            <?php
            // Wallpapers
            the_widget('Telegram_Banner_Widget', array('size' => 'telegram_desktop_wallpaper_left'));
            the_widget('Telegram_Banner_Widget', array('size' => 'telegram_dekstop_wallpaper_right')); ?>
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
            global $wpdb;
            $current = 0;
            $sql = "select meta_key, meta_value from wp_postmeta where post_id = %d and ( meta_key in ('_zoninator_order_37783', 'latest_off'))";
            $break = [
                get_post_meta(519214, 'break_1_article', true)[0],
                get_post_meta(519214, 'break_2_article', true)[0]
                ];
            while ( have_posts() ) {
	            the_post();
	            if (in_array(get_the_ID(), $break)){
	                continue;
                }
	            $metas = $wpdb->get_results($wpdb->prepare($sql, get_the_ID()), ARRAY_A);
	            if ($metas) {
	                $should_quit = false;
	                foreach ($metas as $meta) {
	                    if ($meta['meta_key'] === 'latest_off') {
	                        if ($meta['meta_value'] == 1) {
	                            $should_quit = true;
	                            break;
                            }
                        }
                        else {
	                        $should_quit = true;
	                        break;
                        }
                    }
		            if ( $should_quit ) {
			            continue;
		            }
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
		                the_widget('Telegram_Trending', array('num_home' => 13));
		                ?>
                    </div>
                    <div class="col col-3 sidebar">
                        <div class="right-bg"></div>
		                <?php
		                dynamic_sidebar('home_sidebar_1');
		                //the_widget('Telegram_Banner', array('size' => 'telegram_desktop_300x250_v1'));
		                ?>
                    </div>
                    </div>
                    </div>

	                <?php
	                the_widget('Telegram_Banner_Widget', array('size' => 'telegram_desktop_billboard_v2'));
// GET MEGABREAK

	                get_template_part('templates/layout/megabreak');
	                get_template_part('templates/layout/megabillboard');
	                ?>

                    <div class="section-feed section-feed-2">
                    <div class="container">
                        <div class="tg-widget-head big-title lined">
                            Još važnih vijesti
                        </div>
                    </div>
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
	                <?php
	                the_widget('Telegram_Banner_Widget', array('size' => 'telegram_desktop_billboard_v3')); ?>
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
	    <?php
	    dynamic_sidebar('home-sidebar-3'); ?>
    </div>
    </div>
    </div>

<?php


get_footer();
