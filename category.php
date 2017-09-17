<?php
get_header(); ?>

    <div class="category-head container">
        <h1>
            <?php echo get_the_category()[0]->name; ?>
        </h1>
    </div>

    <div class="section-feed section-feed-1">
        <div class="container feed-container">
            <div class="col col-1 feed">
                <?php
                $args      = array(
                    'post_status'    => 'publish'
                );
                $articles  = new WP_Query( $args );
                if ( $articles->have_posts() ) {
                    while ( $articles->have_posts() ) {
                        $articles->the_post();

                        if( $articles->current_post == 0 ) {
                            get_template_part( 'templates/articles/article-1' );
                        } else {
                            get_template_part( 'templates/articles/article-2' );
                        }
                    }
                }
                ?>

                <a href="#" class="btn" id="load-more">Još Telegrama</a>
                
            </div>
            <div class="col col-2 midbar">
                <?php
                dynamic_sidebar('home_mid_1'); ?>
            </div>
            <div class="col col-3 sidebar">
                <div class="right-bg"></div>
                <?php
                dynamic_sidebar('home_sidebar_2'); ?>
            </div>
        </div>
    </div>

<?php
get_footer();