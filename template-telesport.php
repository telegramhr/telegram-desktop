<?php
/* Template Name: Telesport */
get_header();
?>

    </div> <!-- End Content Container -->

    <div class="sportski-homepage sportski-kanal">

        <?php
        // First block of Articles
        $positions = get_option('telegram_positions_telesport');
        $args = array(
            'post_type' => array('telesport'),
            'posts_per_page' => 1,
            'post__in' => array(intval($positions['g1'])),
        );
        $articles = new WP_Query($args);
        if ( $articles->have_posts() ) {
            while ( $articles->have_posts() ) {
                $articles->the_post();
                get_template_part('templates/article/article-fullpage');
            }
        } else {
            get_template_part('templates/article/empty/article-fullpage');
        }
        wp_reset_postdata(); ?>

    <div class="container content-container">
        <div class="page-container">
            <div class="page-content">

                <?php
                $posts = [ intval( $positions['h1'] ), intval( $positions['h2'] ), intval( $positions['h3'] ), intval( $positions['h4'] ), intval( $positions['h5'] ) ];
                global $post, $editable;
                $editable = 1;
                foreach ($posts as $post_id) {
                	$post = get_post( $post_id );
	                if ($post) {
	                	setup_postdata($post);
		                if( $editable % 3 == 0 ) {
			                get_template_part('templates/article/article-fullwidth');
		                } else {
			                get_template_part('templates/article/article-half');
		                }
	                }
	                else {
		                if( $editable % 3 == 0 ) {
			                get_template_part('templates/article/empty/article-fullwidth');
		                } else {
			                get_template_part('templates/article/empty/article-half');
		                }
	                }
	                $editable++;
                }
                wp_reset_postdata(); ?>


            </div>

            <div class="sidebar">
                <?php dynamic_sidebar( 'sidebar-telesport_1' ) ?>
            </div>
        </div>
    </div>

    <?php
    // First block of Articles
    $positions = get_option('telegram_positions_telesport');
    $args = array(
        'post_type' => array('telesport'),
        'posts_per_page' => 1,
        'post__in' => array(intval($positions['g1'])),
    );
    $articles = new WP_Query($args);
    if ( $articles->have_posts() ) {
        while ( $articles->have_posts() ) {
            $articles->the_post();
            get_template_part('templates/article/article-fullpage');
        }
    } else {
        get_template_part('templates/article/empty/article-fullpage');
    }
    wp_reset_postdata(); ?>

    <div class="container content-container">
        <div class="page-container">
            <div class="page-content">

                <?php
                $posts = [ intval( $positions['h1'] ), intval( $positions['h2'] ), intval( $positions['h3'] ), intval( $positions['h4'] ), intval( $positions['h5'] ) ];
                global $post, $editable;
                $editable = 1;
                foreach ($posts as $post_id) {
                    $post = get_post( $post_id );
                    if ($post) {
                        setup_postdata($post);
                        if( $editable % 3 == 0 ) {
                            get_template_part('templates/article/article-fullwidth');
                        } else {
                            get_template_part('templates/article/article-half');
                        }
                    }
                    else {
                        if( $editable % 3 == 0 ) {
                            get_template_part('templates/article/empty/article-fullwidth');
                        } else {
                            get_template_part('templates/article/empty/article-half');
                        }
                    }
                    $editable++;
                }
                wp_reset_postdata(); ?>


            </div>

            <div class="sidebar">
                <?php dynamic_sidebar( 'sidebar-telesport_2' ) ?>
            </div>
        </div>
    </div>

<?php
get_footer();