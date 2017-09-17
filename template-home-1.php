<?php
/* Template Name: Naslovnica */
get_header();
?>

<div class="page-container home-page cf">

    <div class="page-content">
        <?php
        // First block of Articles
        $positions = get_transient('telegram_positions_home');
        $args = array(
            'post_type' => array('post', 'fotogalerije', 'video', 'price'),
            'showposts' => 1,
            'post__in' => array(intval($positions['g1'])),
        );
        $articles = new WP_Query($args);
        if ( $articles->have_posts() ) {
            while ( $articles->have_posts() ) {
                $articles->the_post();
                get_template_part('templates/article/article-1');
            }
        }
        wp_reset_postdata(); ?>
        
        <div class="col-1">
            <?php
            $args = array(
                'post_type' => array('post', 'fotogalerije', 'video', 'price'),
                'showposts' => 7
            );
            $articles = new WP_Query($args);
            if ( $articles->have_posts() ) {
                $i = 1;
                while ( $articles->have_posts() ) {
                    $articles->the_post();
                    if ( $i > 0 && $i < 4 ) {
                        get_template_part('templates/article/article-2');
                    } else {
                        get_template_part('templates/article/article-feed');
                    }
                $i++;
                }
            }
            wp_reset_postdata(); ?>
        </div>

        <div class="col-2">
            <?php dynamic_sidebar( 'home_thin_1' ) ?>
        </div>

    </div>

    <div class="sidebar">
        <?php dynamic_sidebar( 'home_sidebar_1' ) ?>
    </div>

    <?php
    // Get first break
    dynamic_sidebar('home_break_1'); ?>

    <div class="page-content">
        <div class="col-1">
            <?php
            $args = array(
                'post_type' => array('post', 'fotogalerije', 'video', 'price'),
                'showposts' => 9
            );
            $articles = new WP_Query($args);
            if ( $articles->have_posts() ) {
                $i = 1;
                while ( $articles->have_posts() ) {
                    $articles->the_post();
                    if ( $i == 0 && $i == 3 && $i == 6 ) {
                        get_template_part('templates/article/article-2');
                    } else {
                        get_template_part('templates/article/article-feed');
                    }
                    $i++;
                }
            }
            wp_reset_postdata(); ?>
        </div>

        <div class="col-2">
            <?php dynamic_sidebar( 'home_thin_2' ) ?>
        </div>
    </div>

        <div class="sidebar">
            <?php dynamic_sidebar( 'home_sidebar_2' ) ?>
        </div>

</div>



<?php
get_footer();